<form wire:submit.prevent='add'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-row mb-3">
        <div class="from-group col-md-12 ">
            <div class="input-group ">
                <input type="text" name="name" wire:model.lazy='name' placeholder="ادخل الإسم" class="form-control form-text">

            </div>
        </div>
        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="from-group mb-3">
        <div class="input-group col-12">
            <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="ادخل البريد الألكترونى">
        </div>
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-row mb-3">
        <div class="from-group  col-12 ">
            <div class="input-group">
                <textarea name="message" class="form-control" wire:model.lazy='message' id="message" rows="6"
                    placeholder="ادخل الرسالة هنا"></textarea>
            </div>
        </div>
        @error('message') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>


    <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
        <button class="btn btn-secondary">إرسال <i class="fas fa-location-arrow"></i></button>
    </div>
</form>
