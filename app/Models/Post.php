<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends Model
{
    use HasFactory;

    public static function find($post_name) {
        $file_name = resource_path('posts/' . $post_name . '.html');

        if (!file_exists($file_name)) {
            throw new ModelNotFoundException();
        }

        return file_get_contents($file_name);
    }
}
