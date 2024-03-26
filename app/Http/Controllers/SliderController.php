<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admins.sliders.index',['sliders'=>Slider::all()]);
    }



    /**
     * Display the specified resource.
     */


    public function edit(Request $r)
    {
        return view('admins.sliders.edit',['slider_id'=>$r->id]);
    }
}
