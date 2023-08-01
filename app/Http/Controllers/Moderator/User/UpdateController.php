<?php

namespace App\Http\Controllers\Moderator\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Moderator\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        if (isset($data['position_id'])) {
            $user->update([
                'position_id' => $data['position_id'],
            ]);
        }

        if (isset($data['department_ids'])) {
            $user->departments()->sync($data['department_ids']);
        }

        $user->update($data);

        return view('moderator.user.show', compact('user'));
    }

}
