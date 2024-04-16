<form wire:submit.prevent='completeOrder'>
    <div class="summery">
        <h3 class="text-center">تسجيل العميل</h3>
        <table class="table right-table">
            <tbody>
                <tr class="d-flex justify-content-between flex-column">
                    <td style="border: unset">
                        <input type="text" class="form-control" id="name"
                            aria-describedby="name" placeholder="ادخل الأسم" wire:model.lazy="name" >
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror

                    </td >
                    <td style="border: unset"><input type="text" class="form-control" id="phone"
                            aria-describedby="phone" placeholder="ادخل رقم التليفون" wire:model.lazy='phone'>
                            @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror

                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn d-flex btn-secondary justify-content-center w-100">تقفيل الفاتورة</button>
    </div>
</form>
