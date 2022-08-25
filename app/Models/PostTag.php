<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class PostTag extends Model
{
    use HasFactory;

    protected $table = 'post_tags';

    protected static function deletePostTags($post_id): bool
    {
        try {
            DB::table('post_tags')
                ->where('post_id', '=', $post_id)
                ->delete();
        } catch (\Exception $exception) {
            dd($exception);
        }
        return true;
    }
}
