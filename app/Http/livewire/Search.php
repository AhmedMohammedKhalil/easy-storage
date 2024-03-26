<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Http\Livewire\Result;
use App\Models\Category;

class Search extends Component
{
    public $search,$type;
    public $initalresults;
    public $results;
    public function mount($results) {
        $this->initalresults = $results;
    }

    public function search() {
        if($this->search == '')
            $this->results = Product::all();
        else {
                if($this->type == 1) {
                    $results = Product::where('name','like','%'.$this->search.'%')->get();
                } elseif($this->type == 2) {
                    $results = Product::where('code','like','%'.$this->search.'%')->get();
                } else {
                    $categories_ids = Category::where('name','like','%'.$this->search.'%')->pluck('id')->toArray();
                    $results = Product::whereIn('category_id',$categories_ids)->get();
                }
                $this->results = $results;

        }
        $this->emitTo(Result::class,'showResults',$this->results);
    }
    public function render()
    {
        return view('livewire.search');
    }
}
