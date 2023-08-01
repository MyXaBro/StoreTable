<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Position\UpdateRequest;
use App\Models\Position;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Position $position)
    {
        $data = $request->validated();
        $position->update($data);

        return view('admin.position.show', compact('position'));
    }
}
