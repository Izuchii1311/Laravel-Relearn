<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about', [
            'title' => "About Me",
            'name' => "Luthfi Nur Ramadhan",
            'email' => "luthfiramadhan.lr55@gmail.com",
            'image' => 'about-me.png',
            "active" => "about",
        ]);
    }
}
