<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['avatar'] = Storage::put('images/avatars', $data['avatar']);
        User::firstOrCreate($data);
        return redirect()->route('admin.user.index');
    }
}
