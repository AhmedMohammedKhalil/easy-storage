<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admins.login');
    }

    public function dashboard() {

        $cashier_count = Cashier::all()->count();
        return view('admins.dashboard',compact('cashier_count'));
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
