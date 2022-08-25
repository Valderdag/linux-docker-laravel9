<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Models\PostTag;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        try{
            PostTag::deletePostTags($post->id);
            $post->delete();
        }catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.post.index');
    }
}
