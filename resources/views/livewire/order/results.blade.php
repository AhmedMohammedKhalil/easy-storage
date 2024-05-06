<div class="row">
    <div class="col-12">
        <h2 class="text-center" style="font-weight:bold;margin-bottom:30px"> جميع الطلبات </h2>
    </div>
    @if($orders == null)
        <div class="col-12 col-sm-12 justify-content-center" style="margin-top: 30px">
            <h3 class="text-center">لا يوجد طلبات</h3>
        </div>
    @else
    <div class="col-12 col-sm-12 cart-page-two cart-area">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="accordian" style="margin-top: 20px">
                    <table class="table top-table order-table">
                        <tbody>
                            <tr class="d-flex">
                                <td class="col-12 col-md-3 justify-content-center">
                                    <h2>الإسم</h2>
                                </td>

                                <td class="col-12 col-md-2 justify-content-center">
                                    <h2>رقم الهاتف</h2>
                                </td>

                                <td class="col-12 col-md-3 justify-content-center">
                                    <h2>عدد المنتجات</h2>
                                </td>

                                <td class="col-12 col-md-2 justify-content-center">
                                    <h2>إجمالى السعر</h2>
                                </td>

                                <td class="col-12 col-md-2 justify-content-around">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @foreach ($orders as $order)
                <div class="accordian" style="margin-top: 20px">
                    <table class="table top-table order-table">
                        <tbody>
                            <tr class="d-flex">
                                <td class="col-12 col-md-3 justify-content-center">
                                    <h2>{!! nl2br( $order->name ) !!}</h2>
                                </td>

                                <td class="col-12 col-md-2 justify-content-center">
                                    <h2>{!! nl2br( $order->phone ) !!}</h2>
                                </td>

                                <td class="col-12 col-md-3 justify-content-center">
                                    <h2>{!! nl2br( count($order->items) ) !!} منتجات</h2>
                                </td>

                                <td class="col-12 col-md-2 justify-content-center">
                                    <h2>{!! nl2br( $order->total_price ) !!} دينار</h2>
                                </td>

                                <td class="col-12 col-md-2 justify-content-around">
                                    <a style="padding:0 10px"
                                        data-bs-toggle="collapse" href="#order-{{ $order->id }}"
                                        role="button" aria-expanded="false">
                                        <i style="padding-top: 10px" class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="collapse" id="order-{{ $order->id }}">
                        @foreach ($order->products as $product)
                        <table class="table top-table order-table">
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-12 col-md-3 first-item justify-content-center">
                                        @if($product->image)
                                            <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/data/products/'.$product->id.'/'.$product->image) !!}" alt="image">
                                        @else
                                            <img style="height:100px" class="img-fluid" src="{!! asset('assets/images/img_option/img-1.jpg') !!}" alt="image">
                                        @endif
                                    </td>
                                    <td class="col-12 col-md-3 justify-content-center">
                                        <h2>{!! nl2br( $product->name ) !!}</h2>
                                    </td>

                                    <td class="col-12 col-md-2 justify-content-center">
                                        <h2>{!! nl2br( $product->price ) !!} دينار</h2>
                                        </td>

                                    <td class="col-12 col-md-2 justify-content-center">
                                        <h2>{!! nl2br( $product->pivot->quantity ) !!}</h2>
                                        </td>

                                    <td class="col-12 col-md-2 justify-content-center">
                                        <h2>{!! nl2br( $product->pivot->total ) !!} دينار</h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    @endif
</div>
