<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Department\UpdateRequest;
use App\Models\Department;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Department $department)
    {
        $data = $request->validated();
        $department->update($data);

        return view('admin.department.show', compact('department'));
    }
}
