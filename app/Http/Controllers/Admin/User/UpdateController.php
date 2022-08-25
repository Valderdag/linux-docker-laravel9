<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        if (isset($data['avatar'])):
            $data['avatar'] = Storage::disk('public')->put('images/avatars', $data['avatar']);
        else:
            $data['avatar'] = $user->avatar;
        endif;

        if (isset($data['password'])):
            $data['password'] = Hash::make($data['password'] );
        else:
            $data['avatar'] = $user->password;
        endif;
        $user->update($data);

        return view('admin.user.show', compact('user'));
    }
}
