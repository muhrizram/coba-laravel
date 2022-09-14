<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Models\Posts;
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', [PostsController::class, 'about']);

Route::get('/blog', [PostsController::class, 'posts']);

Route::get('/blog/{post:slug}', [PostsController::class, 'isi']);

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'category']);

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'active' => "posts",
        'posts' => $author->posts->load('category', 'author')
    ]);
});
