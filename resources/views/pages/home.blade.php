@extends('layout')
@section('content')
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach ($list_products as $key => $product)
            <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img height="100px" width="150px"
                                    src="{{ URL::to('public/upload/product/' . $product->product_image) }}" alt="" />
                                <h2>{{ $product->product_price }} VNĐ</h2>
                                <p style="font-size:17px; font-weight:bold;">{{ $product->product_name }}</p>
                                <p class="cart"
                                    style="font-size:17px; font-weight:bold; color:rgb(255, 255, 255); border-radius:15px;">
                                    Chi
                                    tiết sản
                                    phẩm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <!--features_items-->
@endsection
