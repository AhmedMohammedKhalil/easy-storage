<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admins.abouts.index',['abouts'=>About::all()]);
    }



    /**
     * Display the specified resource.
     */


    public function edit(Request $r)
    {
        return view('admins.abouts.edit',['about_id'=>$r->id]);
    }
}
