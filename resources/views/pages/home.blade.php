@extends('layout')
@section('content')
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach ($list_products as $key => $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img height="100px" width="150px"
                                src="{{ URL::to('public/upload/product/' . $product->product_image) }}" alt="" />
                            <h2>{{ $product->product_price }} VNĐ</h2>
                            <p style="font-size:17px; font-weight:bold;">{{ $product->product_name }}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào
                                giỏ</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--features_items-->
@endsection
