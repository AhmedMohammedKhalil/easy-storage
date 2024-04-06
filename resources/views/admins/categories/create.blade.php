@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'إضافة نوع جديد'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> إضافة نوع جديد  </h2>

        @livewire('admin.category.add')
    </div>
</section>
@endsection
