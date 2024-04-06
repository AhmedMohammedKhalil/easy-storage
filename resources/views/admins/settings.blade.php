@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'تعديل البيانات الشخصية'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> تغيير البيانات الشخصية  </h2>

        @livewire('admin.settings')
    </div>
</section>
@endsection
