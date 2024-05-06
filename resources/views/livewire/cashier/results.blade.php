<div class="row product-cards">
    @foreach ($products as $product)
        <div class="col-12 col-md-4 col-lg-4 col-xl-3 d-md-block d-none">
            <div class=" productcard12">
                <article>
                    <div class="pro-thumb">

                        @if($product->image)
                            <img id="{{ $product->id }}" style="height:200px" class="img-fluid" src="{!! asset('assets/images/data/products/'.$product->id.'/'.$product->image) !!}" alt="Product-Image">
                        @else
                            <img id="{{ $product->id }}" style="height:200px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="Product-Image">
                        @endif
                        <div class="pro-hover-icons">
                            <div class="icons">
                                <button class="btn-secondary btn icon" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModalProduct{{ $product->id }}" tabindex="0">
                                    عرض
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="pro-info">

                        <h3><a href="javascript:void(0)" tabindex="0">{{ $product->name }}</a></h3>

                        <div class="pro-weight">
                            المخذون : <h4 style="display: inline-block !important">{{ $product->quantity }}</h4>
                        </div>
                        <div class="pro-price">
                            <ins>{{ $product->price }} دينار كويتى</ins>
                        </div>

                    </div>
                    @livewire('cashier.add-order', ['p_id' => $product->id], key('order1_'.$product->id))
                </article>
            </div>
        </div>




        <div class="modal fade" id="quickViewModalProduct{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="container">
                            <div class="row ">
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-center">
                                        @if($product->image)
                                            <img id="{{ $product->id }}" style="height:300px;width:unset" class="img-fluid" src="{!! asset('assets/images/data/products/'.$product->id.'/'.$product->image) !!}" alt="Product-Image">
                                        @else
                                            <img id="{{ $product->id }}" style="height:300px;width:unset" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="Product-Image">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pro-description">
                                    <div class="row">
                                        <div class="col-12 col-md-12">

                                            <h3>{{ $product->name }}</h3>

                                            <div class="pro-price">
                                                <ins>{{ $product->price }} دينار كويتى</ins>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-single-info"><b>كود المنتج :</b><span>{{ $product->code }}</span></div>
                                                <div class="pro-single-info"><b>فئة المنتج :</b><span>{{ $product->category->name }}</span></div>
                                                <div class="pro-single-info"><b>حالة المنتج :</b><span>@if($product->quantity == 0) غير متاح @else متاح @endif</span></div>
                                                <div class="pro-single-info"><b>الكمية المتاحة:</b><span>{{ $product->quantity }}</span></div>
                                                <div class="pro-single-info"><b>الكمية المباعة :</b><span>{{ $product->quantity_sold }}</span></div>
                                                <div class="pro-single-info"><b> وصف المنتج :</b><span>{!! nl2br($product->details) !!}</span></div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="top:0 !important
                        ">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



</div>
