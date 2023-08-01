<?php

namespace App\Http\Controllers\Moderator\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function index(User $user)
    {
        $roles = User::getRoles();
       return view('moderator.user.show', compact('user', 'roles'));
    }
}
