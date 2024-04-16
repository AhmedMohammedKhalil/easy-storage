@extends('admins.layout')
@push('header')
@include('layouts.header',['title'=>'لوحة التحكم'])
@endpush
@section('section')
<section class="pro-content bounse" style="padding-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pro-heading-title">
                    <h2 class="text-body text-center text-font">لوحة التحكم</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/users.png') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            الكاشير
                        </h5>
                        <p>{{ $cashier_count }}</p>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/categories.png') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            انواع المنتجات
                        </h5>
                        <p>{{ $category_count }}</p>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/products.png') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            المنتجات
                        </h5>
                        <p>{{ $product_count }}</p>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/orders.png') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            الأوردرات
                        </h5>
                        <p>{{ $order_count }}</p>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/messages.png') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            الرسائل
                        </h5>
                        <p>{{ $message_count }}</p>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/sliders.webp') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            السلايدرز
                        </h5>
                        <p>{{ $slider_count }}</p>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0)" class=" ">
                    <div class="box-spaeial text-center bounce_button">
                        <img src="{{ asset('assets/images/data/dashboard/galleries.svg') }}" style="height: 100px" class="img-fluid" alt="...">
                        <h5 class="text-body my-3">
                            معرض الصور
                        </h5>
                        <p>{{ $gallary_count }}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
