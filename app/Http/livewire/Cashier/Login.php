<?php

namespace App\Http\Livewire\Cashier;

use App\Models\Order;
use App\Models\Cashier;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email'   => 'required|email|exists:cashiers,email',
        'password' => 'required|min:8'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'exists' => 'هذا الايميل غير مسجل فى الموقع',
    ];

    public function login(){
        $validatedData = $this->validate();
        if(Auth::guard('cashier')->attempt($validatedData)){
            $flag = false;
            if(auth('cashier')->user()->openOrder->first()) {
                $flag = true;
            }
            //dd($flag);
            if($flag == false) {
                Order::create([
                    'status' => true,
                    'cashier_id' => auth('cashier')->user()->id,
                    'total_price' => 0
                ]);
            }
            session()->flash('message', "تم دخولك ينجاح");
            return redirect()->route('home');
        }else{
            session()->flash('error', 'هناك خطا فى الايميل او الباسورد');
        }
    }

    public function render()
    {
        return view('livewire.cashier.login');
    }
}
