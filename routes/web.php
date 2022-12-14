<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::list()
    ]);
});

Route::get('/posts/{post_name}', function ($post_name) {
    return view('post', [
        'post_content' => Post::find($post_name)
    ]);
});

