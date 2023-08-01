<?php


namespace App\Http\Controllers\Admin\Position;


use App\Models\Position;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('admin.position.index', compact('positions'));
    }
}
