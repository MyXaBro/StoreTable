<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DeleteController extends Controller
{
    public function index(Department $department)
    {
        $department->delete();
        return redirect()->route('admin.department.index');
    }
}
