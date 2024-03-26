<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller
{

    public function showLoginForm() {
        return view('cashiers.login');
    }
    public function profile() {
        return view('cashiers.profile',['page_name' => 'البروفايل']);
    }

    public function showRegisterForm() {
        return view('cashiers.register');
    }

    public function edit(Request $request) {
        return view('cashiers.edit',['cashier_id' => $request->id]);
    }


    public function delete(Request $request) {
        Cashier::whereId($request->id)->delete();
        return redirect()->route('cashier.index');
    }


    public function settings() {
        return view('cashiers.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('cashiers.changePassword',['page_name' => 'تغيير كلمة السر']);
    }


    public function logout(Request $request) {
        Auth::guard('cashier')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
