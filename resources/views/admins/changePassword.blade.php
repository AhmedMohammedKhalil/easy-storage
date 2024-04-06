@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تغيير كلمة السر'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تغيير كلمة السر  </h2>

        @livewire('admin.change-password')
    </div>
</section>
@endsection
