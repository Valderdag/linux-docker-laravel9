<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\PostUserLike;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->getLikes;
        return view('personal.liked.index', compact('posts'));
    }
}
