@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'إضافة فئة جديدة'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> إضافة فئة جديدة  </h2>

        @livewire('admin.category.add')
    </div>
</section>
@endsection
