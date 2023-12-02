<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexCategories() {
        return view('categories',[
            'title' => 'Categories',
            "active" => "categories",
            'categories' => Category::all()
        ]);
    }
}
