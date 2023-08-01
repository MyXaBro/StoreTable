<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Department\StoreRequest;
use App\Models\Department;


class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();

        Department::firstOrCreate($data);

        return redirect()->route('admin.department.index');
    }
}
