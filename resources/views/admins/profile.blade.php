@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'البروفايل'])
@endpush
@section('section')
<div class="blog_ blog-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="blog">
                <div class="blog-thumb">

                    @if(auth('admin')->user()->image)
                            <img class="img-fluid" src="{!! asset('assets/images/data/admins/'.auth('admin')->user()->id.'/'.auth('admin')->user()->image) !!}" alt="image">
                        @else
                            <img class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                    @endif
                </div>
                <div class="blog-info text-black">

                    <h3><a href="javascript:void(0)">{{ auth('admin')->user()->name }}</a></h3>
                    <p class="mb-2">{{ auth('admin')->user()->c_number }}</p>
                    <p class="mb-2">{{ auth('admin')->user()->email }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
