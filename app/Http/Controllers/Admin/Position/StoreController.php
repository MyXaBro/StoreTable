<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Position\StoreRequest;
use App\Models\Position;


class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();

        Position::firstOrCreate($data);

        return redirect()->route('admin.position.index');
    }
}
