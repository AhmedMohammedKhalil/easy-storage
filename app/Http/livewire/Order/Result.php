<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Result extends Component
{
    public $orders;
    public $flag = false;

    protected $listeners = [
        'showResults',
        'refresh'=>'makeRefresh'
    ];

    public function makeRefresh() {
        $this->emit('refreshOrder');
        $this->emit('$refresh');
    }


    public function showResults($results) {
        $this->flag = true;
        if($results) {
            $ids = [];
            foreach($results as $result) {
                $ids[] = $result['id'];
            }
            $this->orders = Order::find($ids);
        } else {
            $this->orders = '';
        }


    }

    public function render()
    {
        if(auth('admin')->check() == true) {
            $orders = Order::where('status',false)->get();
        } else {
            $orders = auth('cashier')->user()->closeOrders;
        }
        $this->orders = $this->flag == true ? $this->orders : $orders;
        return view('livewire.order.results');
    }
}
