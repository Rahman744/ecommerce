<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get()
    }

    public function show(Category $category) 
    {
        return view('categories.show');
    }
}
