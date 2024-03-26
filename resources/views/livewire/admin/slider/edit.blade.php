
<form class="user-form" wire:submit.prevent='edit'>
    <h3>تعديل السلايدر</h3>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">

        <div class="col-12">
            <div class="form-group">
                <label for="title" >العنوان</label>
                <input type="text" wire:model.lazy='title' id="title" class="form-control" placeholder="المحتوى">
                @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
                <label for="video" >الصورة</label>
                <input type="file" wire:model='image' id="image" class="form-control" placeholder="">
                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="video" >الفيديو</label>
                <input type="file" wire:model='video' id="video" class="form-control" placeholder="">
                @error('video') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
                <label for="content" >المحتوى</label>
                <textarea name="content" class="form-control" wire:model.lazy='content' id="content" rows="6"
                    placeholder="المحتوى"></textarea>
                @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">حفظ التغييرات</button>
        </div>
    </div>
</form>

