<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() 
    {
        $categories = Category::where('is_top', 1)->get();

        return view('customer.home', compact('categories'));
    }
}
