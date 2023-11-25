<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/blogs', function() {
    return view('blogs', [
        'title' => "Blogs",
    ]);
});

// All Post
Route::get('/posts', function() {
    $blog_posts = [
        [
            "nama" => "Upi",
            "slug" => "upi",
            "npm" => 2142430,
            "jurusan" => "IF"
        ],
        [
            "nama" => "Upi2",
            "slug" => "upi2",
            "npm" => 2142430,
            "jurusan" => "DEKAPI"
        ],
        [
            "nama" => "Upi3",
            "slug" => "upi3",
            "npm" => 2142430,
            "jurusan" => "ES I"
        ]
    ];
    return view('posts', [
        'title' => "All Post",
        'posts' => $blog_posts
    ]);
});

// Single Post
Route::get('/posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "nama" => "Upi",
            "slug" => "upi",
            "npm" => 2142430,
            "jurusan" => "IF"
        ],
        [
            "nama" => "Upi2",
            "slug" => "upi2",
            "npm" => 2142430,
            "jurusan" => "DEKAPI"
        ],
        [
            "nama" => "Upi3",
            "slug" => "upi3",
            "npm" => 2142430,
            "jurusan" => "ES I"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => "Single Post",
        'post' => $new_post
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => "About Us",
    ]);
});