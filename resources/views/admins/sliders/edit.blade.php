@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل السلايدر'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تعديل السلايدر   </h2>

        @livewire('admin.slider.edit',['slider_id'=>$slider_id])
    </div>
</section>
@endsection
