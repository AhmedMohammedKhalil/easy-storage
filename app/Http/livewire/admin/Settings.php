<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Helper\ImageStore;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='',$c_number, $image,$admin_id='';


    public function mount() {
        $this->admin_id = Auth::guard('admin')->user()->id;
        $this->name = Auth::guard('admin')->user()->name;
        $this->email = Auth::guard('admin')->user()->email;
        $this->c_number = Auth::guard('admin')->user()->c_number;

    }

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

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,[
                'email'   => ['required','email',"unique:admins,email,".$this->admin_id],
                'c_number' => ['required', 'string','min:12','regex:/^([0-9\s\-\+\(\)]*)$/','max:12','unique:admins,c_number,'.$this->admin_id],
        ]));
        if(!$this->image)
            Admin::whereId($this->admin_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            Admin::whereId($this->admin_id)->update(array_merge($validatedata,['image' => $imagename]));
            ImageStore::store('assets/images/data/admins/'.$this->admin_id,$this->image,$imagename);
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('admin.profile');
    }

    public function render()
    {
        return view('livewire.admin.settings');
    }
}
