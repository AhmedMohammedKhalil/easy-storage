<form wire:submit.prevent='add'>
    <div class="pro-quantiy" @if($product->quantity == 0) style="visibility: hidden" @endif>
        <div class="input-group-control2">
            <span class="input-group-btn">
                <button type="button" value="quantity{{ $product->id }}"
                    class=" btn btn-secondary" wire:click='minus' data-type="minus"
                    data-field="">
                    <i class="fas fa-minus"></i>
                </button>
            </span>

            <input type="text" id="quantity{{ $product->id }}" wire:model="quantity" name="quantity" class="form-control"
                maxlength="5" value="1" size="5" min="1" max="{{ $product->quantity }}" style="width: 46px;text-align:center">

            <span class="input-group-btn">
                <button type="button" value="quantity{{ $product->id }}"
                    class=" btn btn-secondary" wire:click='plus' data-type="plus"
                    data-field="">
                    <i class="fas fa-plus"></i>
                </button>
            </span>
        </div>
        <div class="icons">
            <button class="icon btn-secondary btn" title="اضافة الى مشترياتى" onclick="notificationCart();"
                tabindex="0">
                <i class="fas fa-shopping-bag" style="display: block !important"></i>
            </button>
        </div>
    </div>
    @error('quantity') <span class="text-danger error">{{ $message }}</span>@enderror

</form>
