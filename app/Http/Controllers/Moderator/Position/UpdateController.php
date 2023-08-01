<?php

namespace App\Http\Controllers\Moderator\Position;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\Position\UpdateRequest;
use App\Models\Position;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Position $position)
    {
        $data = $request->validated();
        $position->update($data);

        return view('moderator.position.show', compact('position'));
    }
}
