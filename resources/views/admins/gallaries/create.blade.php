@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'إضافة صورة جديدة'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> إضافة صورة جديدة  </h2>

        @livewire('admin.gallary.add')
    </div>
</section>
@endsection
