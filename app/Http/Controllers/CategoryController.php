<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }


    public function edit(Request $request)
    {
        return view('categories.create',['category_id' => $request->id]);
    }

    public function delete(Request $request) {
        Category::whereId($request->id)->delete();
        return redirect()->route('category.index');
    }

}
