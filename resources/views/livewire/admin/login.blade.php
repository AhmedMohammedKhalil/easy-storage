<form wire:submit.prevent='login'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="from-group mb-3">
        <div class="input-group col-12">
            <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="ادخل البريد الألكترونى">
        </div>
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>
    <div class="from-group mb-3">
        <div class="input-group col-12">
            <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="ادخل كلمة السر">
        </div>
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>
    <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
        <button class="btn btn-secondary">تسجيل دخول</button>
    </div>
</form>
