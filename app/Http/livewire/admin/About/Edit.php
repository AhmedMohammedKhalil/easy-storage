<?php

namespace App\Http\Livewire\Admin\About;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{

    use WithFileUploads;

    public $content,$image, $about;

    public function mount($about_id)
    {
        $this->about = About::find($about_id);
        $this->content = $this->about->content;

    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'content.max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'image' => 'لابد ان يكون الملف صورة',
        'image.mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
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
            $this->about->update($validatedData);
        }
        $path = '/data/abouts/';
        $dir = public_path('assets/images/data/'.$path);
        if($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->about->update(array_merge($validatedData,['image'=> $imagename]));

            if(file_exists($dir)) {
                File::deleteDirectories($dir);
                File::deleteDirectory($dir);
            }
            mkdir($dir);
            $this->image->storeAs($path,$imagename);
        }

        File::deleteDirectory(public_path('assets/data/livewire-tmp'));
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.about.index');
    }
    public function render()
    {
        return view('livewire.admin.about.edit');
    }
}
