<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" => "Home"
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Muhammad Rizki Ramadhan",
            "email" => "muhrizram19@gmail.com",
            "image" => "muhrizram.jpg"
        ]);
    }

    public function posts()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function isi(Post $post)
    {
        return view('post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
