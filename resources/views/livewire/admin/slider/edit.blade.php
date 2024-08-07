
<form wire:submit.prevent='edit'>

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <input type="text" name="title" wire:model.lazy='title' placeholder="ادخل العنوان" class="form-control form-text">

            </div>
        </div>
        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <textarea name="content" class="form-control" wire:model.lazy='content' id="content" rows="6"
                    placeholder="ادخل المحتوى"></textarea>
            </div>
        </div>
        @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
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
</form>
