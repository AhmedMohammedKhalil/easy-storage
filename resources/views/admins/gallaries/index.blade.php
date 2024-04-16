@extends('admins.layout')

@push('css')
    <style>
        .accordian h2{
            margin-bottom: 0
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>'إدارة معرض الصور'])
@endpush
@section('section')
<section class="order-content">
    <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع الصور </h2>
    <div class="col-12 col-sm-12 justify-content-center btn-cont">
        <div class="row">
            <a href="{{ route('admin.gallary.create') }}"
                class="btn btn-secondary">إضافة صورة جديدة</a>
        </div>
    </div>
    @foreach ($gallaries as $gallary)
    <div class="accordian" style="margin-top: 20px">
        <table class="table top-table order-table">
            <tbody>
                <tr class="d-flex" style="margin-bottom: 0">
                    <td class="col-12 col-md-8">
                        @if($gallary->image)
                            <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/data/galleries/'.$gallary->id.'/'.$gallary->image) !!}" alt="image">
                        @else
                            <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                        @endif
                    </td>
                    <td class="col-12 col-md-4 justify-content-around">
                        <a href="{{ route('admin.gallary.edit',['id'=>$gallary->id]) }}" style="padding:0 10px">
                            <i class="fas fa-pen-alt"></i>
                        </a>
                        @if(count($gallaries) > 4)
                        <a href="{{ route('admin.gallary.delete',['id'=>$gallary->id]) }}" style="padding:0 10px">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
    @if(count($gallaries) == 0)
    <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
        <h3 class="text-center">لا يوجد صور</h3>
    </div>
    @endif

</section>
@endsection
