<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Product;
use Livewire\Component;

class Result extends Component
{
    public $results;
    public $flag = false;

    protected $listeners = [
        'showResults',
    ];


    public function showResults($results) {
        $this->flag = true;
        if($results) {
            $ids = [];
            foreach($results as $result) {
                $ids[] = $result['id'];
            }
            $this->results = Product::find($ids);
        } else {
            $this->results = '';
        }

    }

    public function render()
    {
        $this->results = $this->flag == true ? $this->results : Product::all();
        return view('livewire.results');
    }
}
