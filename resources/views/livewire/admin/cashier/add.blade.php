<form wire:submit.prevent='add'>
    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <input type="text" name="c_number" wire:model.lazy='c_number' class="form-control form-text" placeholder="ادخل الرقم المدنى" >
            </div>
        </div>
        @error('c_number') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <input type="text" name="name" wire:model.lazy='name' placeholder="ادخل الإسم" class="form-control form-text">

            </div>
        </div>
        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="email" name="email" wire:model.lazy='email' placeholder="ادخل البريد الألكترونى" class="form-control form-text" >
            </div>
        </div>
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group">
                <input type="text" name="phone" wire:model.lazy='phone' class="form-control form-text" placeholder="ادخل رقم الهاتف" >
            </div>
        </div>
        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>

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
</form>
