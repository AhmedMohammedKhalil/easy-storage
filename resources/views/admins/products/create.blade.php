@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'إضافة منتج جديد'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> إضافة منتج جديد  </h2>

        @livewire('admin.product.add')
    </div>
</section>
@endsection
