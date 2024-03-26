<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function edit(Request $request)
    {
        return view('products.create',['product_id' => $request->id]);
    }

    public function delete(Request $request) {
        Product::whereId($request->id)->delete();
        return redirect()->route('product.index');
    }
}
