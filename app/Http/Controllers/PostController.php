<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post) { // Post = model, diikat olh modelnya
        dd($post);
        return view('post', [
            "title" => "Single Post",
            "post" => $post // kita cari postingan berdasarkan slug nya
        ]);

    }
}
