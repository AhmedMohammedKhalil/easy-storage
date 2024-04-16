<form wire:submit.prevent='search'>


    <div class="form-row mb-3 row">
        <div class="from-group col-md-6 col-sm-12">
            <label for="from">بداية الفترة</label>
            <div class="input-group ">
                <input type="datetime-local" name="from" wire:model.lazy='from' placeholder="بداية الفترة" class="form-control form-text">
            </div>
        </div>

        <div class="from-group col-md-6 col-sm-12">
            <label for="to">نهاية الفترة</label>
            <div class="input-group ">
                <input type="datetime-local" name="to" wire:model.lazy='to' placeholder="نهاية الفترة" class="form-control form-text">
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
        <button class="btn btn-secondary">بحث</button>
    </div>
</form>
