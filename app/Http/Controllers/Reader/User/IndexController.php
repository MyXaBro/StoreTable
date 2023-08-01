<?php


namespace App\Http\Controllers\Reader\User;


use App\Models\User;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('reader.user.index', compact('users'));
    }
}
