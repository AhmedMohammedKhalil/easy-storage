<?php

namespace App\Http\Livewire\Cashier;

use App\Models\Cashier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password='', $confirm_password='',$cashier_id='';


    public function mount() {
        $this->cashier_id = Auth::guard('cashier')->user()->id;
    }


    protected $rules = [

        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'same' => 'لابد ان يكون الباسورد متطابق',
    ];

    public function edit() {

        $validatedata = $this->validate();
        $data =['password' => Hash::make($this->password)];

        Cashier::whereId($this->cashier_id)->update($data);
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('cashier.profile');
    }

    public function render()
    {
        return view('livewire.cashier.change-password');
    }
}
