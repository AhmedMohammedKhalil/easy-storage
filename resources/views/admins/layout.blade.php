@extends('layouts.app')
@section('content')
    <div style="min-height:800px">
        @stack('header')
        <div class="pro-content checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="row">
                            <div class="col-12 col-lg-3 ">
                                @include('admins.menu')
                            </div>
                            <div class="col-12 col-lg-9 ">
                                <div class="checkout-module">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active">
                                            @yield('section')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
