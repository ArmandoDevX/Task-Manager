<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationHandler extends Component
{

    public function markAsRead($id){

       auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    }
    public function render()
    {
        return view('livewire.notification-handler');
    }
}
