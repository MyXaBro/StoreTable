<?php

namespace App\Http\Controllers\Moderator\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;

class ShowController extends Controller
{
    public function index(Position $position)
    {
       return view('moderator.position.show', compact('position'));
    }
}
