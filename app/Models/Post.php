<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'content',
        'description'
    ];
    protected $withCount = ['LikedUsers'];
    public function tags ()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function category ()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function LikedUsers ()
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }
    public function comments ()
    {
        return $this->hasMany(Comment::class, 'post_id',  'id');
    }
}
