@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل البيانات الشخصية'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        @livewire('admin.settings')
    </div>
</section>
@endsection
