<?php

namespace App\Http\Controllers\Moderator\Position;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index()
    {
        return view('moderator.position.create');
    }
}
