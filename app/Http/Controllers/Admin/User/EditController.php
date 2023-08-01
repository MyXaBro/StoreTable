<?php

namespace App\Http\Controllers\Admin\User;

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
        return view('admin.user.edit', compact('user', 'roles', 'positions', 'departments'));
    }
}
