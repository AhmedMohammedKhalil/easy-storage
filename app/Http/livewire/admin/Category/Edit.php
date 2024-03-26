<?php

namespace App\Http\Livewire\Admin\Category;

use App\Helper\ImageStore;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{
    public $name,$category;


    public function mount($category_id)
    {
        $this->category = Category::find($category_id);
        $this->name = $this->category->name;
    }
    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'c_number.max' => 'لابد ان يكون الرقم المدنى 12 رقم',
        'c_number.min' => 'لابد ان يكون الرقم المدنى 12 رقم',
        'c_number.unique' => 'هذا الرقم المدنى مسجل فى الموقع',


    ];




    public function edit()
    {
        $validatedata = $this->validate();
        $this->category->update($validatedata);

        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.category.index');
    }

    public function render()
    {
        return view('livewire.admin.category.edit');
    }
}
