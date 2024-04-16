<form wire:submit.prevent='add' class="row flex-column align-items-center">
    <div class="col-lg-6 col-md-12">

        <div class="form-row mb-3">
            <div class="from-group col-md-12 ">
                <div class="input-group">
                    <input type="file" name="image" class="form-control" wire:model='image' placeholder="إرفع الصورة">
                </div>
            </div>
            @error('image') <span class="text-danger error">{{ $message }}</span>@enderror

        </div>


        <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
            <button class="btn btn-secondary">إضافة</button>
        </div>
    </div>
</form>
