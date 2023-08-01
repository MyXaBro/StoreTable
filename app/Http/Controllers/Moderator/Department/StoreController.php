<?php

namespace App\Http\Controllers\Moderator\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Department\StoreRequest;
use App\Models\Department;


class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();

        Department::firstOrCreate($data);

        return redirect()->route('moderator.department.index');
    }
}
