@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تغيير كلمة السر'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        @livewire('admin.change-password')
    </div>
</section>
@endsection
