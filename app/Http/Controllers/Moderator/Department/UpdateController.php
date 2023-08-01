<?php

namespace App\Http\Controllers\Moderator\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Department\UpdateRequest;
use App\Models\Department;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Department $department)
    {
        $data = $request->validated();
        $department->update($data);

        return view('moderator.department.show', compact('department'));
    }
}
