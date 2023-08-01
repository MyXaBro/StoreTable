<?php


namespace App\Http\Controllers\Admin\Department;


use App\Models\Department;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }
}
