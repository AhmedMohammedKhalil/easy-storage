@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'إضافة كاشير جديد'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> إضافة كاشير جديد  </h2>
        @livewire('admin.cashier.add')
    </div>

</section>
@endsection
