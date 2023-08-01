<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['departmentsCount'] = Department::all()->count();
        $data['positionsCount'] = Position::all()->count();

        return view('admin.main.index', compact('data'));
    }
}
