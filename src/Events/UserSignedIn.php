<?php

namespace App\Events;

use App\Core\Event;
use App\Models\User;

class UserSignedIn extends Event
{
    public function __construct(public User $user)
    {

    }
}