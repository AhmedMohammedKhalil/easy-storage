@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل السلايدر'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        @livewire('admin.slider.edit',['slider_id'=>$slider_id])
    </div>
</section>
@endsection
