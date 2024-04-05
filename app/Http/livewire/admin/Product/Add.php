<?php

namespace App\Http\Livewire\Admin\Product;


use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Helper\ImageStore;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Add extends Component
{
    use WithFileUploads;
    public $name,$price,$category_id,$image,$code,$quantity,$categories;



    protected $rules = [
        'name' => ['required', 'string', 'max:100'],
        'price' => ['required', 'numeric', 'gt:0'],
        'category_id' => ['required','gt:0'],
        'code' => ['required'],
        'quantity' => ['required','numeric','gt:0'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'owner.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'gt' => 'لابد ان يكون الرقم اكبر من 0',
        'numeric' => 'لابد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];



    public function updatedImage()
    {
            $validateddata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048','required']]
            );
    }


    public function add(){

        $this->code = time();
        $validatedata = $this->validate();
        if(!$this->image ) {
            $this->updatedImage();
        }

        $imagename = $this->image->getClientOriginalName();
        $product = Product::create(array_merge($validatedata, [
            'image' => $imagename,
        ]));
        ImageStore::store('img/products/' . $product->id,$this->image,$imagename);

        session()->flash('message', "تم إضافة المنتج بنجاح");
        return redirect()->route('admin.product.index');
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.admin.product.add');
    }
}
