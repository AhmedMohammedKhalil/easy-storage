@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل من نحن'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تعديل من نحن </h2>

        @livewire('admin.about.edit',['about_id'=>$about_id])
    </div>
</section>
@endsection
