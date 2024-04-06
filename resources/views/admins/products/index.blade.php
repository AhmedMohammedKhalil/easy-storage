@extends('admins.layout')

@push('css')
    <style>
        .accordian h2{
            margin-bottom: 0
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>'إدارة المنتجات'])
@endpush
@section('section')
<section class="order-content">
    <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع المنتجات </h2>
    @if(count($categories) > 0)
    <div class="col-12 col-sm-12 justify-content-center btn-cont">
        <div class="row">
            <a href="{{ route('admin.product.create') }}"
                class="btn btn-secondary">إضافة نوع جديد</a>
        </div>
    </div>
    @endif
    @foreach ($products as $product)
    <div class="accordian" style="margin-top: 20px">
        <table class="table top-table order-table">
            <tbody>
                <tr class="d-flex">
                    <td class="col-12 col-md-2 first-item">
                        @if($product->image)
                            <img class="img-fluid" src="{!! asset('assets/images/data/products/'.$product->id.'/'.$product->image) !!}" alt="image">
                        @else
                            <img class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                        @endif
                    </td>
                    <td class="col-12 col-md-4">
                       <h2>{!! nl2br( $product->name ) !!}</h2>
                    </td>

                    <td class="col-12 col-md-2">
                        <h2>{!! nl2br( $product->code ) !!}</h2>
                     </td>

                     <td class="col-12 col-md-2">
                        <h2>{!! nl2br( $product->price ) !!}</h2>
                     </td>
                    <td class="col-12 col-md-2 justify-content-around">
                        <a style="padding:0 10px"
                            data-bs-toggle="collapse" href="#product-{{ $product->id }}"
                            role="button" aria-expanded="false">
                            <i style="padding-top: 5px" class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.product.edit',['id'=>$product->id]) }}" style="padding:0 10px">
                            <i style="padding-top: 5px" class="fas fa-pen-alt"></i>
                        </a>
                        @if(count($product->orders) == 0)
                        <a href="{{ route('admin.product.delete',['id'=>$product->id]) }}" style="padding:0 10px">
                            <i style="padding-top: 5px" class="fas fa-trash-alt"></i>
                        </a>
                        @endif
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

    @if(count($categories) == 0)
    <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
        <h3 class="text-center">لا يوجد انواع منتجات يجب اضافة الأنواع اولاً</h3>
    </div>
    @endif

    @if(count($products) == 0 && count($categories) > 0)
    <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
        <h3 class="text-center">لا يوجد منتجات</h3>
    </div>
    @endif

</section>
@endsection
