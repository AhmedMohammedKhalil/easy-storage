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
@include('layouts.header',['title'=>'جميع الأوردرات'])
@endpush
@section('section')
        <div class="page-area pro-content pt-0" >
            <div class="container">
                <div class="row justify-content-center account-content">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="col-12  px-0">
                            <div class="tab-content" id="registerTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    <div class="registration-process">
                                        <livewire:order.search />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style="padding-top: 100px">
            <div class="container">
                @livewire('order.result')
            </div>
        </section>

@endsection
