<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        $posts = auth()->user()->likedPosts;
        return view('personal.main.index', compact('posts', 'comments'));
    }
}
