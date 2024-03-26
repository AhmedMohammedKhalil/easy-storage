<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{
    use WithFileUploads;

    public $title, $content,$image, $video,$slider;

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
        'video.mimes' => 'لابد ان يكون الفيديو mp4,mkv,flv',
        'video.max' => 'يجب ان تكون الفيديو اصغر من 100 ميجا',

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

    public function updatedVideo()
    {
        $validatedata = $this->validate(
            ['video' => ['mimes:mp4,mkv,flv', 'max:102400']]
        );
    }


    public function edit()
    {
        $validatedData = $this->validate();
        if(!$this->image) {
            $this->slider->update($validatedData);
        }
        $path = '/images/sliders/';
        $dir = public_path('assets'.$path);
        if($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->slider->update(array_merge($validatedData,['image'=> $imagename]));

            if(file_exists($dir.'/image')) {
                File::deleteDirectories($dir.'/image');
                File::deleteDirectory($dir.'/image');
            }
            mkdir($dir.'/image');
            $this->image->storeAs($path.'/image',$imagename);
        }

        if($this->video) {
            $this->updatedVideo();
            $videoname = $this->video->getClientOriginalName();
            $this->slider->update(array_merge($validatedData,['video'=>$videoname]));

            if(file_exists($dir.'/video')) {
                File::deleteDirectories($dir.'/video');
                File::deleteDirectory($dir.'/video');
            }
            mkdir($dir.'/video');
            $this->video->storeAs($path.'/video',$videoname);
        }
        File::deleteDirectory(public_path('assets/livewire-tmp'));
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.slider.index');
    }

    public function render()
    {
        return view('livewire.admin.slider.edit');
    }
}
