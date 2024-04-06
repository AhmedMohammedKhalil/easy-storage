@extends('admins.layout')

@push('css')
    <style>
        .accordian h2{
            margin-bottom: 0
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>' جميع الرسائل'])
@endpush
@section('section')
<section class="order-content">
    <div class="heading-title">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع الرسائل </h2>
    </div>
    @foreach ($contacts as $contact)
    <div class="accordian" style="margin-top: 20px">
        <table class="table top-table order-table">
            <tbody>
                <tr class="d-flex">
                    <td class="col-12 col-md-3">
                       <h2>{{ $contact->name }}</h2>
                    </td>
                    <td class="col-12 col-md-3"><h2>{{ $contact->email }}</h2></td>
                    <td class="col-12 col-md-6">
                        <h2>{!! nl2br( $contact->message ) !!}</h2>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach

    @if(count($contacts) == 0)
        <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
            <h3 class="text-center">لا يوجد رسائل</h3>
        </div>
    @endif

</section>
@endsection
