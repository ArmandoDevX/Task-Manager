<?php

use App\Livewire\Counter;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Task\ListAll;
use App\Livewire\Task\Create;

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
        return view('home');
    })->name('home');

    
    Route::get('/tasks', ListAll::class)->name('task.list');
    Route::get('/tasks/create', Create::class)->name('task.create');
    Route::get('/tasks/{id}/edit', Create::class)->name('task.edit');
    Route::get('/tasks/{id}/view', Create::class)->name('task.delete');

    Route::get('register', Register::class)->name('register')->middleware('can:isSuperAdmin');

    Route::get('/superadmin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('can:isSuperAdmin');

});