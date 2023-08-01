<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class EditController extends Controller
{
    public function index(Department $department)
    {
        return view('admin.department.edit', compact('department'));
    }
}
