<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Post $post, Category $category)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'category', 'categories'));
    }
}
