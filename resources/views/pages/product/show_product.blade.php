@extends('layout')
@section('content')
    <div class="category_product">
        <h2 class="title text-center">Sản phẩm</h2>
        @foreach ($products as $key => $product)
            <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img height="100px" width="150px"
                                    src="{{ URL::to('public/upload/product/' . $product->product_image) }}" alt="" />
                                <h2>{{ number_format($product->product_price) }}đ</h2>
                                <p style="color:#fff; font-size:17px; font-weight:bold;">{{ $product->product_name }}</p>
                                <p class="cart" style="padding:10px; margin: 10px;">
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
@endsection
