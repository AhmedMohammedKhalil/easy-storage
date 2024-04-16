<?php

namespace App\Http\Livewire\Cashier;

use App\Models\Order;
use App\Models\Cashier;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CompleteOrder extends Component
{

    public $name,$phone,$cashier,$order;

    public function mount() {
        $this->cashier = Cashier::whereId(auth('cashier')->user()->id)->first();
        $this->order = $this->cashier->openOrder->first();
    }

    protected $rules = [
        'name'   => 'required|string|max:50',
        'phone' => 'required|min:8|max:8|regex:/^([0-9\s\-\+\(\)]*)$/'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'phone.max' => 'لابد ان يكون الحقل مكون على الاكثر من 8 خانات',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
    ];

    public function completeOrder(){
        $validatedData = $this->validate();
        $validatedData = array_merge($validatedData,[
            'added_at' => now(),
            'status' => false
        ]);
        Order::whereId($this->order->id)->update($validatedData);
        Order::create([
            'status' => true,
            'cashier_id' => auth('cashier')->user()->id,
            'total_price' => 0
        ]);

        return redirect()->route('cashier.orders');
    }

    public function render()
    {
        return view('livewire.cashier.compelete-order');
    }
}
