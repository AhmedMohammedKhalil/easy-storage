@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'إضافة كاشير جديد'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        @livewire('admin.cashier.add')
    </div>

</section>
@endsection
