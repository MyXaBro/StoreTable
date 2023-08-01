<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index()
    {
        return view('admin.position.create');
    }
}
