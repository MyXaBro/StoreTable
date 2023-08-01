<?php

namespace App\Http\Controllers\Moderator\Department;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function index()
    {
        return view('moderator.department.create');
    }
}
