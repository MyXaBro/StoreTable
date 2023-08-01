<?php

namespace App\Http\Controllers\Moderator\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class EditController extends Controller
{
    public function index(Department $department)
    {
        return view('moderator.department.edit', compact('department'));
    }
}
