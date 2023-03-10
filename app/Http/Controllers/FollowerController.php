<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
     public function store(User $user, Request $request)
    {
        dd(user->username);
    }
}


