<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Position;
use App\Models\User;

class CreateController extends Controller
{
    public function index()
    {
        $roles = User::getRoles();
        $positions = Position::all();
        $departments = Department::all();
        return view('admin.user.create', compact('roles', 'positions', 'departments'));
    }
}
