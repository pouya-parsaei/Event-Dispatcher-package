<?php

namespace App\Listeners;

use App\Core\Event;
use App\Core\Listener;

class UpdateLastLogin extends Listener
{

    public function handle(Event $event)
    {
        echo "Update last login for user by id: " . $event->user->id;
    }
}