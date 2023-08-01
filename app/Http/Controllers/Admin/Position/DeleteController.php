<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;

class DeleteController extends Controller
{
    public function index(Position $position)
    {
        $position->delete();
        return redirect()->route('admin.position.index');
    }
}
