<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('getLikedUsers')->orderBy('get_liked_users_count','DESC')->get()->take(4);
        $categories = Category::all();
        return view('main.index', compact('posts', 'randomPosts', 'likedPosts', 'categories'));
    }
}
