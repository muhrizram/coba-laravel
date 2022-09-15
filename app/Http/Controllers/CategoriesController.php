<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {

        return view('categories', [
            "title" => "Post Categories",
            "active" => "categories",
            "categories" => Category::latest()->filter(request(['search']))->get()
        ]);
    }
}
