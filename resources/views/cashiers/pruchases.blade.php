@extends('cashiers.layout')

@push('css')
    <style>
        .cart-area h2{
            font-size: 20px !important;
            margin-bottom: 0;
            padding-top: 10px;
            text-align: center
        }

        .cart-area .right-table tbody th, .cart-area .right-table tbody td {
            padding: 10px 5px;
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>'جميع المشتريات'])
@endpush
@section('section')

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع المشتريات </h2>
            </div>
            @if(count($order->products) == 0)
                <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
                    <h3 class="text-center">لا يوجد مشتريات</h3>
                </div>
            @else
            <div class="col-12 col-sm-12 cart-page-two cart-area">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        @foreach ($order->products as $product)
                        <div class="accordian" style="margin-top: 20px">
                            <table class="table top-table order-table">
                                <tbody>
                                    <tr class="d-flex">
                                        <td class="col-12 col-md-2 first-item justify-content-center">
                                            @if($product->image)
                                                <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/data/products/'.$product->id.'/'.$product->image) !!}" alt="image">
                                            @else
                                                <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                                            @endif
                                        </td>
                                        <td class="col-12 col-md-2 justify-content-center">
                                            <h2>{!! nl2br( $product->name ) !!}</h2>
                                        </td>

                                        <td class="col-12 col-md-2 justify-content-center">
                                            <h2>{!! nl2br( $product->price ) !!}</h2>
                                            </td>

                                        <td class="col-12 col-md-2 justify-content-center">
                                            <h2>{!! nl2br( $product->pivot->quantity ) !!}</h2>
                                            </td>

                                        <td class="col-12 col-md-2 justify-content-center">
                                            <h2>{!! nl2br( $product->pivot->total ) !!}</h2>
                                            </td>
                                        <td class="col-12 col-md-2 justify-content-around">
                                            <a style="padding:0 10px"
                                                data-bs-toggle="collapse" href="#product-{{ $product->id }}"
                                                role="button" aria-expanded="false">
                                                <i style="padding-top: 10px" class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('cashier.purchases-delete',['id'=> $product->pivot->id]) }}" style="padding:0 10px">
                                                <i style="padding-top: 10px" class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="collapse" id="product-{{ $product->id }}">
                                <div class="card card-body">
                                    <section class="orderdetail-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 style="font-weight:bold;text-align:center;margin-bottom:10px">بيانات المنتج</h2>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <table class="table order-id">
                                                    <tbody>
                                                        <tr class="d-flex align-items-center">
                                                            <td class="col-6 col-md-6">
                                                                <strong>اسم المنتج</strong>
                                                            </td>
                                                            <td class="col-6 col-md-6">
                                                                <p style="margin-bottom: 0">{{ $product->name }}</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="d-flex align-items-center">
                                                            <td class="col-6 col-md-6">
                                                                <strong>كود المنتج</strong></td>
                                                            <td class="col-6 col-md-6">
                                                                <p style="margin-bottom: 0">{{ $product->code }}</p>
                                                            </td>
                                                        </tr>

                                                        <tr class="d-flex align-items-center">
                                                            <td class="col-6 col-md-6">
                                                                <strong>نوع المنتج</strong></td>
                                                            <td class="col-6 col-md-6">
                                                                <p style="margin-bottom: 0">{{ $product->category->name }}</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <table class="table order-id">
                                                    <tbody>
                                                        <tr class="d-flex align-items-center">
                                                            <td class="col-6 col-md-6">
                                                                <strong>سعر المنتج</strong>
                                                            </td>
                                                            <td class="col-6 col-md-6">
                                                                <p style="margin-bottom: 0">{{ $product->price }}</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="d-flex align-items-center">
                                                            <td class="col-6 col-md-6">
                                                                <strong>الكمية المتاحة</strong></td>
                                                            <td class="col-6 col-md-6">
                                                                <p style="margin-bottom: 0">{{ $product->quantity }}</p>
                                                            </td>
                                                        </tr>

                                                        <tr class="d-flex align-items-center">
                                                            <td class="col-6 col-md-6">
                                                                <strong>الكمية المباعة</strong></td>
                                                            <td class="col-6 col-md-6">
                                                                <p style="margin-bottom: 0">{{ $product->quantity_sold }}</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <div class="comments-area" style="background: white;padding:10px">
                                                    <h3 style="font-weight: bold">وصف المنتج</h3>
                                                    <p style="margin-bottom: 0">{!! nl2br($product->details) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="summery">
                            <h3 class="text-center">اجمالى الفاتورة</h3>
                            <table class="table right-table">
                                <tbody>
                                    <tr>
                                        <th>الأجمالى</th>
                                        <td class="justify-content-end d-flex">{{ $order->total_price }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-md-6">
                        @livewire('cashier.complete-order')
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

@endsection
