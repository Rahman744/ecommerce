<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 25;

        $categories = Category::paginate($perPage);

        return view('panel.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('panel.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_sale' => 'nullable|boolean',
            'is_top' => 'nullable|boolean',
        ]);
        Category::create($data);

        return to_route('panel.categories.index')->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('panel.categories.edit', compact('category'));
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
