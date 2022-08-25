<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (isset($data['avatar'])):
        $data['avatar'] = Storage::disk('public')->put('images/avatars', $data['avatar']);
        endif;
        $data['password'] = Hash::make($data['password'] );
        User::firstOrCreate(['email' => $data['email']], $data);

        return redirect()->route('admin.user.index');
    }
}
