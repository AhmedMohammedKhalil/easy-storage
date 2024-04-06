<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admins.products.index', compact('products','categories'));
    }

    public function create()
    {
        return view('admins.products.create');
    }


    public function edit(Request $request)
    {
        return view('admins.products.edit',['product_id' => $request->id]);
    }

    public function delete(Request $request) {
        Product::whereId($request->id)->delete();
        return redirect()->route('admin.product.index');
    }
}
