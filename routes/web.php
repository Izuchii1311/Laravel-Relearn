<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page
Route::get('/', function () {
    return view('home', [
        'title' => "Home Page",
        "active" => "home",
    ]);
});

// Blog Page
Route::get('/services', function() {
    return view('services', [
        'title' => "Services",
        "active" => "services",
    ]);
});

// All Post
Route::get('/posts', [PostController::class, 'index']);
// Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/about', function() {
    return view('about', [
        'title' => "About Me",
        'name' => "Luthfi Nur Ramadhan",
        'email' => "luthfiramadhan.lr55@gmail.com",
        'image' => 'about-me.png',
        "active" => "about",
    ]);
});

// Categories
Route::get('/categories', function(Category $category) {
    return view('categories',[
        'title' => 'Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts',[
        'title' => "Post by Category : $category->name",
        "active" => "categories",
        'posts' => $category->posts->load('author', 'category'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts',[
        'title' => "Post by Author : $author->name",
        "active" => "posts",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});