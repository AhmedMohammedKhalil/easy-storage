@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل بيانات الكاشير'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        @livewire('admin.cashier.edit',['cashier_id'=>$cashier_id])
    </div>
</section>
@endsection
