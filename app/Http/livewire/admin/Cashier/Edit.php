<?php

namespace App\Http\Livewire\Admin\Cashier;

use App\Models\Cashier;
use Livewire\Component;
use App\Helper\ImageStore;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class Edit extends Component
{
    use WithFileUploads;
    public $name, $email, $phone, $image,$password,$c_number,$confirm_password,$cashier;



    public function mount($cashier_id)
    {
        $this->cashier=cashier::find($cashier_id);
        $this->name = $this->cashier->name;
        $this->email = $this->cashier->email;
        $this->phone = $this->cashier->phone;
        $this->c_number = $this->cashier->c_number;

    }
    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا البريد الألكتروني غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'email.unique' => 'هذا البريد الألكتروني مسجل فى الموقع',
        'same' => 'لابد ان يكون كلمة المرور متطابق',
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
    public function updatedPassword()
    {
        $validatedata = $this->validate(
            [
                'password' => ['min:8'],
                'confirm_password' => ['min:8', 'same:password']
            ]
        );
    }
    public function edit()
    {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,[
                'email'   => ['required','email',"unique:cashiers,email,".$this->cashier->id],
                'c_number' => ['required', 'string','min:12','regex:/^([0-9\s\-\+\(\)]*)$/','max:12','unique:cashiers,c_number,'.$this->cashier->id],
        ]));

        if ($this->password) {
            $this->updatedPassword();
            $validatedata = array_merge(
                $validatedata,
                ['password' => Hash::make($this->password)]
            );
        }
        if (!$this->image)
            $this->cashier->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->cashier->update(array_merge($validatedata, ['image' => $imagename]));
            ImageStore::store('assets/images/data/cashiers/' .  $this->cashier->id,$this->image,$imagename);

        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.cashier.index');
    }
    public function render()
    {
        return view('livewire.admin.cashier.edit');
    }
}
