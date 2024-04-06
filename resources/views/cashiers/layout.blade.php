@extends('layouts.app')
@section('content')
    <div style="min-height:800px">
        @stack('header')
        <div>
            @include('cashiers.menu')
            @yield('section')
        </div>
    </div>

@endsection
