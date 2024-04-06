@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل بيانات النوع'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تعديل بيانات النوع  </h2>

        @livewire('admin.category.edit',['category_id'=>$category_id])
    </div>
</section>
@endsection
