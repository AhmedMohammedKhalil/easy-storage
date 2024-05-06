@extends('admins.layout')

@push('css')
    <style>
        .accordian h2{
            margin-bottom: 0
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>'إدارة الفئات '])
@endpush
@section('section')
<section class="order-content">
    <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع الفئات </h2>
    <div class="col-12 col-sm-12 justify-content-center btn-cont">
        <div class="row">
            <a href="{{ route('admin.category.create') }}"
                class="btn btn-secondary">إضافة فئة جديدة</a>
        </div>
    </div>
    @foreach ($categories as $category)
    <div class="accordian" style="margin-top: 20px">
        <table class="table top-table order-table">
            <tbody>
                <tr class="d-flex" style="margin-bottom: 0">
                    <td class="col-12 col-md-8">
                       <h2>{!! nl2br( $category->name ) !!}</h2>
                    </td>
                    <td class="col-12 col-md-4 justify-content-around">
                        <a href="{{ route('admin.category.edit',['id'=>$category->id]) }}" style="padding:0 10px">
                            <i class="fas fa-pen-alt"></i>
                        </a>
                        @if(count($category->products) == 0)
                        <a href="{{ route('admin.category.delete',['id'=>$category->id]) }}" style="padding:0 10px">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
    @if(count($categories) == 0)
    <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
        <h3 class="text-center">لا يوجد فئات</h3>
    </div>
    @endif

</section>
@endsection
