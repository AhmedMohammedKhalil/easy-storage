<?php

namespace App\Http\Livewire\Admin\Gallary;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Helper\ImageStore;
use App\Models\Gallary;

class Edit extends Component
{

    use WithFileUploads;
    public $image,$gallary;

    public function mount($gallary_id)
    {
        $this->gallary = Gallary::find($gallary_id);
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png,webp',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png,webp', 'max:2048']]
        );
    }

    public function edit()
    {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->gallary->update(array_merge(array('image' => $imagename)));
            ImageStore::store('assets/images/data/galleries/'.$this->gallary->id,$this->image,$imagename);
        File::deleteDirectory(public_path('livewire-tmp'));
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.gallary.index');
    }
    public function render()
    {
        return view('livewire.admin.gallary.edit');
    }
}
