<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        if (isset($data['department_ids'])) {
            $departmentsIds = $data['department_ids'];
        }

        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $data['image'],
            'role' => $data['role'],
        ];

        if (isset($data['position_id'])) {
            $userData['position_id'] = $data['position_id'];
        }

        $user = User::create($userData);

        if (isset($data['department_ids'])) {
            $user->departments()->sync($departmentsIds);
        }

        return redirect()->route('admin.user.index');
    }

}
