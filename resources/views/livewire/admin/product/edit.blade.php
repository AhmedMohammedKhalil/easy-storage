<form wire:submit.prevent='edit' class="row flex-column align-items-center">
    <div class="col-lg-6 col-md-12">
    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <input type="text" name="code" wire:model.lazy='code' class="form-control form-text" placeholder="ادخل كود المنتج" >
            </div>
        </div>
        @error('code') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <input type="text" name="name" wire:model.lazy='name' placeholder="ادخل اسم المنتج" class="form-control form-text">

            </div>
        </div>
        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-row ">
        <div class="from-group col-md-12">
            <div class="input-group select-control mb-3">

                <select  name="category_id" wire:model.lazy='category_id' class="form-control" id="inlineFormInputGroup4">
                    <option value="0">اختر نوع المنتج</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $category_id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="text" name="price" wire:model.lazy='price' class="form-control form-text" placeholder="ادخل سعر المنتج" >
            </div>
        </div>
        @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="text" name="quantity" wire:model.lazy='quantity' class="form-control form-text" placeholder="ادخل كمية المنتج" >
            </div>
        </div>
        @error('quantity') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-row mb-3 col-md-12">
        <div class="from-group  col-md-12 ">
            <div class="input-group ">
                <textarea name="details" class="form-control" wire:model.lazy='details' id="details" rows="6"
                    placeholder="ادخل وصف المنتج"></textarea>
            </div>
        </div>
        @error('details') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="file" name="image" class="form-control" wire:model='image' placeholder="إرفع الصورة">
            </div>
        </div>
        @error('image') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>





    <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
        <button class="btn btn-secondary">حفظ</button>
    </div>
    </div>
</form>
