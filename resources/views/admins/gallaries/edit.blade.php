@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل الصورة'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تعديل الصورة  </h2>

        @livewire('admin.gallary.edit',['gallary_id'=>$gallary_id])
    </div>
</section>
@endsection
