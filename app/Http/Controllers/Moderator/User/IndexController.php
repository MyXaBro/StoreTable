<?php


namespace App\Http\Controllers\Moderator\User;


use App\Models\User;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('moderator.user.index', compact('users'));
    }
}
