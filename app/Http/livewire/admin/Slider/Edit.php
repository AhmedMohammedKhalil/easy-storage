<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use App\Helper\ImageStore;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{
    use WithFileUploads;

    public $title, $content,$image,$slider;

    public function mount($slider_id)
    {
        $this->slider = Slider::find($slider_id);
        $this->content = $this->slider->content;
        $this->title = $this->slider->title;

    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'image' => 'لابد ان يكون الملف صورة',
        'image.mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',

    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }




    public function edit()
    {
        $validatedData = $this->validate();
        if(!$this->image) {
            $this->slider->update($validatedData);
        }

        if($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->slider->update(array_merge($validatedData,['image'=> $imagename]));
            ImageStore::store('assets/images/data/sliders/' .  $this->slider->id,$this->image,$imagename);
        }

        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.slider.index');
    }

    public function render()
    {
        return view('livewire.admin.slider.edit');
    }
}
