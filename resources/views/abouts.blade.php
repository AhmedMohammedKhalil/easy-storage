@extends('layouts.app')

@section('content')
    <div style="min-height:800px;">
        @include('layouts.header',['title' => 'من نحن'])
        <div class="page-area pro-content" style="padding: 100px 0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img style="height: 400px;width:100%" src="{{ asset('assets/images/data/abouts/1/about-us.png') }}" alt="profile">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="heading">
                            <h3>
                                من نحن
                            </h3>
                        </div>
                        <p class="peragraph2">
                            {!! nl2br($about->content) !!}
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center account-content" style="padding: 100px 0">
                    <div class="heading">
                        <h3 style="text-align: center;font-weight:500;font-size:1.75rem">
                            تواصل معنا
                        </h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="col-12  px-0">
                            <div class="tab-content" id="registerTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    <div class="registration-process">
                                        <livewire:about />
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
