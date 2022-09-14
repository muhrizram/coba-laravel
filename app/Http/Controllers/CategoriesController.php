<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'active' => "categories",
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('posts', [
            'title' => "Post by Category : $category->name",
            'active' => "categories",
            'posts' => $category->posts,
        ]);
    }
}
