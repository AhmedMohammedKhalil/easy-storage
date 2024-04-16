<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use App\Http\Livewire\Order\Result;

class Search extends Component
{
    public $from,$to;
    public $initalresults;
    public $orders;
    public $results;
    public function mount() {
        if(auth('admin')->check() == true) {
            $this->initalresults = Order::where('status',false)->get();
            //$this->orders = Order::where('status','!=','Open')->get();
        } else {
            $this->initalresults = auth('cashier')->user()->closeOrders;
            //$this->orders = Order::where('status','!=','Open')->where('cashier_id',auth('cashier')->user()->id)->get();
        }

    }




    public function search() {
        $this->results = '';
        if($this->from == '') {
            $this->results = $this->initalresults;
        }
        else {
            $from = date('Y-m-d H:i:s', strtotime($this->from));
            if($this->to != null) {
                $to = date('Y-m-d H:i:s', strtotime($this->to));
            }
            else {
                $to = date('Y-m-d H:i:s', strtotime(now()));
            }
            $this->results = $this->initalresults->whereBetween('added_at', [$from, $to]);
        }
        $this->emitTo(Result::class,'showResults',$this->results);
    }
    public function render()
    {
        return view('livewire.order.search');
    }
}
