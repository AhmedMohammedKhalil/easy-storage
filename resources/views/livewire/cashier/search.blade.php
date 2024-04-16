<form wire:submit.prevent='search'>
    <div class="form-row">
        <label for="type">اختر نوع البحث</label>
        <div class="from-group col-md-12">
            <div class="input-group select-control mb-3">
                <select  name="type" wire:model.lazy='type' class="form-control" id="type">
                    <option value="1" selected>كود المنتج</option>
                    <option value="2">اسم المنتج</option>
                    <option value="3">نوع المنتج</option>
                </select>
            </div>
        </div>
    </div>


    <div class="form-row mb-3">
        <div class="from-group col-md-12">
            <div class="input-group ">
                <input type="text" name="search" wire:model.lazy='search' placeholder="ابحث هنا" class="form-control form-text">
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-12 Login-btn d-flex justify-content-center">
        <button class="btn btn-secondary">بحث</button>
    </div>
</form>
