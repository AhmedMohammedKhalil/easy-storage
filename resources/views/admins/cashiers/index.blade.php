@extends('admins.layout')

@push('css')
    <style>
        .accordian h2{
            margin-bottom: 0
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>'إدارة جميع المسؤلين عن الكاشير'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع المسؤلين عن الكاشير </h2>
        <div class="col-12 col-sm-12 justify-content-center btn-cont">
            <div class="row">
                <a href="{{ route('admin.cashier.create') }}"
                    class="btn btn-secondary">إضافة كاشير جديد</a>
            </div>
        </div>
    </div>
    @foreach ($cashiers as $cashier)
    <div class="accordian" style="margin-top: 20px">
        <table class="table top-table order-table">
            <tbody>
                <tr class="d-flex">
                    <td class="col-12 col-md-2 first-item">
                        @if($cashier->image)
                            <img style="height:150px" class="img-fluid" src="{!! asset('assets/images/data/cashiers/'.$cashier->id.'/'.$cashier->image) !!}" alt="image">
                        @else
                            <img style="height:150px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                        @endif
                    </td>
                    <td class="col-12 col-md-2">
                       <h2>{{ $cashier->name }}</h2>
                    </td>
                    <td class="col-12 col-md-3"><h2>{{ $cashier->email }}</h2></td>
                    <td class="col-12 col-md-2">
                        <h2>{{ $cashier->phone }}</h2>
                    </td>
                    <td class="col-12 col-md-3 justify-content-around">
                        <a href="{{ route('admin.cashier.edit',['id'=>$cashier->id]) }}" style="padding:0 10px">
                            <i class="fas fa-pen-alt"></i>
                        </a>
                        @if(count($cashier->orders) == 0)
                        <a href="{{ route('admin.cashier.delete',['id'=>$cashier->id]) }}" style="padding:0 10px">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach

    @if(count($cashiers) == 0)
        <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
            <h3 class="text-center">لا يوجد كاشير</h3>
        </div>
    @endif

</section>
@endsection
