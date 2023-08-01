<?php

namespace App\Http\Controllers\Moderator\User;

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
        return view('moderator.user.create', compact('roles', 'positions', 'departments'));
    }
}
