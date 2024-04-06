@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل من نحن'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        @livewire('admin.about.edit',['about_id'=>$about_id])
    </div>
</section>
@endsection
