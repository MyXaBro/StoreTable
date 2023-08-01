<?php

namespace App\Http\Controllers\Reader\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;

class ShowController extends Controller
{
    public function index(Position $position)
    {
       return view('reader.position.show', compact('position'));
    }
}
