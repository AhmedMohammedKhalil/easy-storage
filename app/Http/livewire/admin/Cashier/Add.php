<?php

namespace App\Http\Livewire\Admin\Cashier;

use App\Models\cashier;
use Livewire\Component;
use App\Helper\ImageStore;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Add extends Component
{

    use WithFileUploads;

    public $name, $email, $password, $confirm_password, $image, $phone, $c_number;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'email'   => 'required|email|unique:cashiers,email',
        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
        'c_number' => ['required', 'string','min:12','regex:/^([0-9\s\-\+\(\)]*)$/','max:12','unique:admins,c_number'],

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


    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }

    public function add()
    {
        $validatedata = $this->validate();
        $imagename = $this->image->getClientOriginalName();
        $cashier = Cashier::create(array_merge($validatedata, [
            'image' => $imagename,
            'password' => Hash::make($this->password)
        ]));
        ImageStore::store('assets/images/data/cashiers/' . $cashier->id,$this->image,$imagename);

        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.cashier.index');
    }

    public function render()
    {
        return view('livewire.admin.cashier.add');
    }
}
