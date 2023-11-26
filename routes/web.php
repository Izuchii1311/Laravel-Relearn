<?php

use App\Models\Post;
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
    ]);
});

// Blog Page
Route::get('/services', function() {
    return view('services', [
        'title' => "Services",
    ]);
});

// All Post
Route::get('/posts', [PostController::class, 'index']);

// Single Post
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/about', function() {
    return view('about', [
        'title' => "About Me",
        'name' => "Luthfi Nur Ramadhan",
        'email' => "luthfiramadhan.lr55@gmail.com",
        'image' => 'about-me.png'
    ]);
});