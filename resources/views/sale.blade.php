@extends('layouts.app')

@section('content')
    <div style="min-height:800px;">
        @include('layouts.header',['title' => 'نقطة بيع'])
        <div class="page-area pro-content" style="padding: 100px 0">
            <div class="container">
                <div class="row justify-content-center account-content">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="col-12  px-0">
                            <div class="tab-content" id="registerTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    <div class="registration-process">
                                        <livewire:cashier.search />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-area pro-content" style="padding: 100px 0">
            <div class="container">
                <div class="row">
                    <div class="col-12 px-4">
                        <div class="pro-heading-title">
                            <h2 class="text-center">المنتجات
                            </h2>
                        </div>
                            <livewire:cashier.result />
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
