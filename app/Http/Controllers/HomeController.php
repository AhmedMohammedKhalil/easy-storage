<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use App\Models\Gallary;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $about = About::limit(1)->first();
        $about->content = strlen($about->content) > 100 ? substr($about->content, 0, 350)."...": $about->content;
        $galleries = Gallary::all();
        return view('home',compact('sliders','about','galleries'));
    }


    public function aboutus()
    {
        $about = About::limit(1)->first();
        return view('abouts',compact('about'));
    }


    public function sale()
    {
        $products = Product::all();
        return view('sale',compact('products'));
    }
}
