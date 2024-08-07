<?php

namespace App\Http\Livewire\Cashier;

use App\Models\Cashier;
use Livewire\Component;
use App\Helper\ImageStore;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $image, $phone='', $c_number='',$cashier_id='',$cashier;


    public function mount() {
        $this->cashier_id = Auth::guard('cashier')->user()->id;
        $this->name = Auth::guard('cashier')->user()->name;
        $this->email = Auth::guard('cashier')->user()->email;
        $this->phone = Auth::guard('cashier')->user()->phone;
        $this->c_number = Auth::guard('cashier')->user()->c_number;
        $this->cashier = Cashier::whereId($this->cashier_id)->first();

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

    public function edit()
    {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,[
                'email'   => ['required','email',"unique:cashiers,email,".$this->cashier_id],
                'c_number' => ['required', 'string','min:12','regex:/^([0-9\s\-\+\(\)]*)$/','max:12','unique:cashiers,c_number,'.$this->cashier_id],
        ]));

        if (!$this->image)
            $this->cashier->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->cashier->update(array_merge($validatedata, ['image' => $imagename]));
            ImageStore::store('img/cashiers/' . $this->cashier_id,$this->image,$imagename);

        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('cashier.profile');
    }
    public function render()
    {
        return view('livewire.cashier.settings');
    }
}
