<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;

class EditController extends Controller
{
    public function index(Position $position)
    {
        return view('admin.position.edit', compact('position'));
    }
}
