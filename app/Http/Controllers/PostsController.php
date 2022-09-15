<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function about()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Muhammad Rizki Ramadhan",
            "email" => "muhrizram19@gmail.com",
            "image" => "muhrizram.jpg"
        ]);
    }

    public function posts()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function isi(Post $post)
    {
        return view('post',[
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
