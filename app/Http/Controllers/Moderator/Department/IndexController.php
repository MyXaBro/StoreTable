<?php


namespace App\Http\Controllers\Moderator\Department;


use App\Models\Department;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('moderator.department.index', compact('departments'));
    }
}
