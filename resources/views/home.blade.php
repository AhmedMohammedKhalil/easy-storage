@extends('layouts.app')

@section('content')
<div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect136"
    data-source="gallery" style="padding:0px;">
    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
    <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
        <ul>

            @foreach ($sliders as $slider)
                <li data-index="rs-{{ $slider->id }}" data-transition="slideoverhorizontal" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                    data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                    data-title="Big &amp; Bold" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/data/sliders/'.$slider->id.'/'.$slider->image) }}" alt="" data-bgposition="top center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                        data-no-retina>
                    <!-- LAYERS -->

                    <div class="container" style="position: relative;">

                        <!-- LAYER NR. 1 -->
                        <!-- LAYER NR. 2 -->

                        <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-{{ $slider->id }}-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['603','480','300','20']"
                            data-y="['top','top','top','top']" data-voffset="['150','90','60','40'] "
                            data-fontsize="['50','40','30','24']" data-lineheight="['70','50','40','30']"
                            data-width="['700','700','100%','100%']" data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-basealign="slide"
                            data-responsive_offset="off"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                            "mask":"x:0px;y:[-100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;",
                            "delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;",
                            "ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']"
                            style="z-index: 11; white-space: nowrap; color:white;text-wrap:wrap">{{ $slider->title }}<br> <span style="font-size: 20px;text-wrap:wrap">{{ $slider->content }}</span>
                        </div>
                        <br>

                    </div>
                </li>
            @endforeach


        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>

<div class="page-area pro-content" style="padding: 50px 0">
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
                <div>
                    <a href="{{ route('aboutus') }}"
                    class="btn btn-secondary">المزيد</a>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="pro-about-content pro-content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="pro-heading-title">
                    <h2 class="text-center"> معرض الصور
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-4">
                <div class="about-carousel-js row">
                    @foreach ($galleries as $gallery)
                        <div class="col-12 col-md-4">
                            <div class="blog">
                                <img class="img-fluid" src="{{ asset('assets/images/data/galleries/'.$gallery->id.'/'.$gallery->image) }}" alt="About-Image">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
