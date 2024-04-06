
<form wire:submit.prevent='edit'>


    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="password" name="new_password" wire:model.lazy='password' placeholder="ادخل كلمة السر" class="form-control form-text" >
            </div>
        </div>
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="password" name="confirm_password" wire:model.lazy='confirm_password' placeholder="اعد كلمة السر" class="form-control form-text" >
            </div>
        </div>
        @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>



    <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
        <button class="btn btn-secondary">حفظ</button>
    </div>
</form>
