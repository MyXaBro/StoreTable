<?php


namespace App\Http\Controllers\Moderator\Position;


use App\Models\Position;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('moderator.position.index', compact('positions'));
    }
}
