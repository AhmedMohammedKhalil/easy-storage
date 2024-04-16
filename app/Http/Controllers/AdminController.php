<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Slider;
use App\Models\Cashier;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admins.login');
    }

    public function dashboard() {

        $order_count= Order::where('status',false)->count();
        $cashier_count = Cashier::all()->count();
        $gallary_count= Gallary::all()->count();
        $category_count= Category::all()->count();
        $product_count= Product::all()->count();
        $message_count= Contact::all()->count();
        $slider_count= Slider::all()->count();
        return view('admins.dashboard',compact('cashier_count','order_count','category_count','product_count','gallary_count',
        'message_count','slider_count'));

    }

    public function profile() {
        return view('admins.profile');
    }

    public function settings() {
        return view('admins.settings');
    }

    public function changePassword() {
        return view('admins.changePassword');
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }

}
