<?php

namespace App\Http\Controllers\Reader\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class ShowController extends Controller
{
    public function index(Department $department)
    {
       return view('reader.department.show', compact('department'));
    }
}
