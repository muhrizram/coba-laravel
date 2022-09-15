<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        $title = 'All Posts';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Posts in '.$category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = 'Posts by '.$author->name;
        }
        return view('posts', [
            "title" => $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
