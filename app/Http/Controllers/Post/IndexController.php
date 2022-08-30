<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::paginate(6);
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(4);
        return view('post.index', compact('post','posts', 'date', 'relatedPosts'));
    }
}
