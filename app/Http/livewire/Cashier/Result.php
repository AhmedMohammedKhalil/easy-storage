<?php

namespace App\Http\Livewire\Cashier;

use App\Models\College;
use App\Models\Product;
use Livewire\Component;

class Result extends Component
{
    public $products;
    public $flag = false;

    protected $listeners = [
        'showResults',
        'refresh'=>'makeRefresh'
    ];

    public function makeRefresh() {
        $this->emit('refreshProduct');
        $this->emit('$refresh');
    }


    public function showResults($results) {
        $this->flag = true;
        if($results) {
            $ids = [];
            foreach($results as $result) {
                $ids[] = $result['id'];
            }
            $this->products = Product::find($ids);
        } else {
            $this->products = '';
        }

    }

    public function render()
    {
        $this->products = $this->flag == true ? $this->products : Product::all();
        return view('livewire.cashier.results');
    }
}
