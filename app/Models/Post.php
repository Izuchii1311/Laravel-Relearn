<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        // jika menggunakan properti static maka harus menggunakan self:: tidak menggunakan $this
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        // cari collection yang slugnya ($posts['slug']) sama dengan $slug
        return $posts->firstWhere('slug', $slug);
    }
}
