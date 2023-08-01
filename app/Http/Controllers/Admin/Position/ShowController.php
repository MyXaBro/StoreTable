<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;

class ShowController extends Controller
{
    public function index(Position $position)
    {
       return view('admin.position.show', compact('position'));
    }
}
