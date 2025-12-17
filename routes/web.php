<?php

use App\Livewire\Counter;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;


use App\Livewire\Task\View;
use App\Livewire\NotificationHandler;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', Login::class)->name('login');

Route::post('logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('user.home');
    })->name('home');

    
    Route::get('/tasks', App\Livewire\Task\ListAll::class)->name('task.list');
    Route::get('/tasks/create', App\Livewire\Task\Create::class)->name('task.create');
    Route::get('/tasks/{id}/edit', App\Livewire\Task\Update::class)->name('task.edit');
    Route::get('/tasks/{id}/delete', App\Livewire\Task\Delete::class)->name('task.delete');

    Route::get('/notifications', NotificationHandler::class)->name('notifications');

    

    Route::get('register', Register::class)->name('register')->middleware('can:isSuperAdmin');

    Route::get('/admin/users', App\Livewire\User\UserAll::class)->name('user.all')->middleware('can:isSuperAdmin');

    Route::get('/admin/permissions/{userId}', App\Livewire\User\UserPermission::class)->name('admin.permissions')->middleware('can:isSuperAdmin');

    Route::get('/superadmin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('can:isSuperAdmin');

});