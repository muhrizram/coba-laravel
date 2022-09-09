<?php

namespace App\Http\Controllers;

use App\Models\Posts;
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
            "posts" => Posts::all()
        ]);
    }

    public function isi($slug)
    {
        return view('post',[
            "title" => "Single Post",
            "post" => Posts::find($slug)
        ]);
    }
}
