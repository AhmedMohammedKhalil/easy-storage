@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل بيانات منتج '])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تعديل بيانات منتج  </h2>
        @livewire('admin.product.edit',['product_id'=>$product_id])
    </div>
</section>
@endsection
