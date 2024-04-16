<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class About extends Component
{
    public $name,$email,$message;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required'],
        'message' => ['required'],

    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',

    ];

    public function add() {
        $validatedData = $this->validate();
        Contact::create($validatedData);
        session()->flash('message', "Contact us Added Successfully.");
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.about');
    }
}
