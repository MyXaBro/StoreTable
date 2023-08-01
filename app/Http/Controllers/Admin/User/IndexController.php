<?php


namespace App\Http\Controllers\Admin\User;


use App\Models\User;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
