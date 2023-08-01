<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function index()
    {
        return view('admin.department.create');
    }
}
