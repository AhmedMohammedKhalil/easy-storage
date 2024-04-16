@extends('cashiers.layout')
@push('header')
@include('layouts.header',['title'=>'البروفايل'])
@endpush
@section('section')
<div class="blog_ blog-4">
    <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> البيانات الشخصية </h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="blog">
                <div class="blog-thumb">

                    @if(auth('cashier')->user()->image)
                            <img style="height: 500px" class="img-fluid" src="{!! asset('assets/images/data/cashiers/'.auth('cashier')->user()->id.'/'.auth('cashier')->user()->image) !!}" alt="image">
                        @else
                            <img style="height: 500px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                    @endif
                </div>
                <div class="blog-info text-black">

                    <h3><a href="javascript:void(0)">{{ auth('cashier')->user()->name }}</a></h3>
                    <p class="mb-2">{{ auth('cashier')->user()->c_number }}</p>
                    <p class="mb-2">{{ auth('cashier')->user()->email }}</p>
                    <p class="mb-2">{{ auth('cashier')->user()->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
