<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $tags = $post->tags->pluck('title')->toArray();
        return view('admin.post.show', compact('post', 'tags'));
    }
}
