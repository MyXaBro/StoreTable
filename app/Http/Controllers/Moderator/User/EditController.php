<?php

namespace App\Http\Controllers\Moderator\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Position;
use App\Models\User;

class EditController extends Controller
{
    public function index(User $user)
    {
        $roles = User::getRoles();
        $positions = Position::all();
        $departments = Department::all();
        return view('moderator.user.edit', compact('user', 'roles', 'positions', 'departments'));
    }
}
