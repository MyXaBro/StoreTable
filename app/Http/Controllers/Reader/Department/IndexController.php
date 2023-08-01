<?php


namespace App\Http\Controllers\Reader\Department;


use App\Models\Department;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('reader.department.index', compact('departments'));
    }
}
