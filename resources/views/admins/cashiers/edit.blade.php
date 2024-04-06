@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل بيانات الكاشير'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تعديل بيانات كاشير  </h2>

        @livewire('admin.cashier.edit',['cashier_id'=>$cashier_id])
    </div>
</section>
@endsection
