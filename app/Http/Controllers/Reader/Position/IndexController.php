<?php


namespace App\Http\Controllers\Reader\Position;


use App\Models\Position;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('reader.position.index', compact('positions'));
    }
}
