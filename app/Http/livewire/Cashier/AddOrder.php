<?php

namespace App\Http\Livewire\Cashier;

use App\Models\Cashier;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddOrder extends Component
{
    public $product,$quantity=1,$product_id,$cashier,$order;


    public function mount($p_id) {
        $this->product = Product::find($p_id);
        $this->quantity = 1;
        $this->cashier = Cashier::whereId(auth('cashier')->user()->id)->first();
        $this->order = $this->cashier->openOrder->first();
    }

    public function plus() {
        if($this->quantity < $this->product->quantity)
            $this->quantity++;
    }

    public function minus() {
        if($this->quantity > 1)
            $this->quantity--;
    }

    public function add() {

        $t = $this->product->quantity;
        $data = $this->validate(
            ['quantity' => ['required','numeric','gt:0','lte:'.$t]] ,
            [
                'gt' => 'لابد ان يكون اكبر من 0',
                'required' => 'هذا الحقل مطلوب',
                'lte' => 'لا بد ان يكون الرقم اصغر من او يساوى '.$t
            ]
        );

        $total = $this->quantity * $this->product->price;
        $this->order->products()->attach($this->product->id,
            [
                'quantity' => $this->quantity,
                'price' => $this->product->price,
                'total' => $total,

            ]);
        $this->order->update(['total_price' => $this->order->total_price + $total]);
        $this->product->update(['quantity' => $this->product->quantity - $this->quantity, 'quantity_sold' => $this->product->quantity_sold + $this->quantity]);

        session()->flash('success', 'تم طلبك بنجاح');
        $this->quantity = 1;

        $this->emitTo(Search::class,'refresh');
        $this->emitTo(Result::class,'refresh');
    }

    public function render()
    {
        return view('livewire.cashier.add-order');
    }
}
