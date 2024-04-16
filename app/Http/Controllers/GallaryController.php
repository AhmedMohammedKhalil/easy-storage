<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallaries = Gallary::all();
        return view('admins.gallaries.index',compact('gallaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.gallaries.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return view('admins.gallaries.edit',['gallary_id' => $request->gallary_id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r)
    {
        Gallary::destroy($r->gallary_id);
        return redirect()->route('admin.gallary.index');
    }
}
