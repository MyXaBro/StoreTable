<?php

namespace App\Http\Controllers\Reader\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function index(User $user)
    {
        $roles = User::getRoles();
       return view('reader.user.show', compact('user', 'roles'));
    }
}