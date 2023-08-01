<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class ShowController extends Controller
{
    public function index(Department $department)
    {
       return view('admin.department.show', compact('department'));
    }
}
