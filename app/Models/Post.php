<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    use HasFactory;

    public static function find($post_name): bool|string
    {
        $file_name = resource_path('posts/' . $post_name . '.html');

        if (!file_exists($file_name)) {
            throw new ModelNotFoundException();
        }

        return file_get_contents($file_name);
    }

    public static function list() {
        //search posts
        $files = File::allFiles(resource_path('posts/'));

        $posts = array_map(function ($file) {
            return $file->getContents();
        }, $files);
        return $posts;
    }
}
