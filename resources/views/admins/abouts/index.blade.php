@extends('admins.layout')

@push('css')
    <style>
        .accordian h2{
            margin-bottom: 0
        }
    </style>
@endpush
@push('header')
@include('layouts.header',['title'=>'إدارة من نحن'])
@endpush
@section('section')
<section class="order-content">
    <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> إدارة من نحن </h2>

    @foreach ($abouts as $about)
    <div class="accordian" style="margin-top: 20px">
        <table class="table top-table order-table">
            <tbody>
                <tr class="d-flex">
                    <td class="col-12 col-md-3 first-item">
                        @if($about->image)
                            <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/data/abouts/'.$about->id.'/'.$about->image) !!}" alt="image">
                        @else
                            <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                        @endif
                    </td>
                    <td class="col-12 col-md-6">
                       <h2>{!! nl2br( $about->content ) !!}</h2>
                    </td>
                    <td class="col-12 col-md-3 justify-content-around">
                        <a href="{{ route('admin.about.edit',['id'=>$about->id]) }}" style="padding:0 10px">
                            <i class="fas fa-pen-alt"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach

</section>
@endsection
