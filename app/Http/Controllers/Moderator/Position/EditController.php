<?php

namespace App\Http\Controllers\Moderator\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;

class EditController extends Controller
{
    public function index(Position $position)
    {
        return view('moderator.position.edit', compact('position'));
    }
}
