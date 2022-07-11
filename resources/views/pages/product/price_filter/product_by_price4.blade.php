@extends('layout')
@section('content')
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Kết quả tìm kiếm</h2>
        @foreach ($bil_1 as $key => $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <form>
                                @csrf
                                <input type="hidden" value="{{ $product->product_id }}"
                                    class="cart_product_id_{{ $product->product_id }}">
                                <input type="hidden" value="{{ $product->product_name }}"
                                    class="cart_product_name_{{ $product->product_id }}">
                                <input type="hidden" value="{{ $product->product_image }}"
                                    class="cart_product_image_{{ $product->product_id }}">
                                <input type="hidden" value="{{ $product->product_price }}"
                                    class="cart_product_price_{{ $product->product_id }}">
                                <input type="hidden" value="1" class="cart_product_qty_{{ $product->product_id }}">
                                <a href=" {{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
                                    <img height="100px" width="150px"
                                        src="{{ URL::to('public/upload/product/' . $product->product_image) }}"
                                        alt="" />
                                    <h2>{{ number_format($product->product_price) }}đ</h2>
                                    <p style="font-size:17px; font-weight:bold;">{{ $product->product_name }}</p>
                                    {{-- <p class="cart"
                                    style="font-size:17px; font-weight:bold; color:rgb(255, 255, 255); border-radius:15px;">
                                    Chi
                                    tiết sản
                                    phẩm</p> --}}
                                </a>
                                <button type="button" class="btn btn-default add-to-cart"
                                    data-id_product="{{ $product->product_id }}" name="add-to-cart">Thêm vào
                                    giỏ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--features_items-->
@endsection
