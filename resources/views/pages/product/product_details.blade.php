@extends('layout')
@section('content')
    @foreach ($products as $key => $product)
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    {{-- <img src="{{ URL::to('public/upload/product/' . $product->product_image) }}" alt="" /> --}}
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href=""><a href=""><img
                                        src="{{ URL::to('public/upload/product/' . $product->product_image) }}"
                                        alt="" /></a></a>
                        </div>
                        <div class="item">
                            <a href=""><a href=""><img
                                        src="{{ URL::to('public/upload/product/' . $product->product_image) }}"
                                        alt="" /></a></a>
                        </div>
                        <div class="item">
                            <a href=""><a href=""><img
                                        src="{{ URL::to('public/upload/product/' . $product->product_image) }}"
                                        alt="" /></a></a>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2 style="font-size:30px; font-weight:bold;"> {{ $product->product_name }}</h2>
                    <p>Mã sản phẩm: {{ $product->product_id }}</p>
                    <img src="images/product-details/rating.png" alt="" />
                    <form method="post" action="{{ URL::to('/save-cart') }}">
                        {{ csrf_field() }}
                        <span>
                            <span>{{ $product->product_price }} VNĐ</span>
                            <br />
                            <label>Số lượng:</label>
                            <input name="qty" type="number" min="1" max="99" value="1" />
                            <input name="productid_hidden" type="hidden" value="{{ $product->product_id }}" />
                        </span>

                        <p><b>Trạng thái:</b> Còn hàng</p>
                        <p><b>Tình trạng sản phẩm:</b> New</p>
                        <button style="margin: 10px 0 0 0;" type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            Thêm vào giỏ hàng
                        </button>
                    </form>
                </div>
                <!--/product-information-->
            </div>
        </div>
    @endforeach
    <!--/product-details-->

    <div class="category-tab shop-details-tab">
        <!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">Thông tin sản phẩm</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá sản phẩm</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details">
                <div class="col-sm">
                    @foreach ($products as $key => $product)
                        <h3>Hãng sản xuất: {{ $product->category_name }}</h3>
                        <p>{{ $product->product_desc }}</p>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade active in" id="reviews">
                <div class="col-sm-12">
                    <ul>
                        @foreach ($admin as $key => $ad)
                            <li><a href=""><i class="fa fa-user"></i>{{ $ad->admin_name }}</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2022</a></li>
                        @endforeach
                    </ul>
                    <p>Mọi bình luận sai phạm sẽ bị khóa tài khoản!</p>
                    <p><b>Viết bình luận</b></p>

                    <form action="#">
                        <span>
                            <input type="text" placeholder="Họ tên" />
                            <input type="email" placeholder="Địa chỉ email" />
                        </span>
                        <textarea name=""></textarea>
                        <b>Đánh giá: </b> <img src="images/product-details/rating.png" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Bình luận
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!--/category-tab-->
    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">Sản phẩm gợi ý</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    @foreach ($list_products as $key => $product)
                        <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}" data-toggle="">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img style="height:100px; width:150px;"
                                                src="{{ URL::to('public/upload/product/' . $product->product_image) }}"
                                                alt="" />
                                            <h2>{{ $product->product_name }}</h2>
                                            <p>{{ $product->product_price }} VNĐ</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Chi
                                                tiết sản
                                                phẩm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="item">
                    @foreach ($list_products as $key => $product)
                        <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}" data-toggle="">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img style="height:100px; width:150px;"
                                                src="{{ URL::to('public/upload/product/' . $product->product_image) }}"
                                                alt="" />
                                            <h2>{{ $product->product_name }}</h2>
                                            <p>{{ $product->product_price }} VNĐ</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Chi
                                                tiết sản
                                                phẩm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!--/recommended_items-->
@endsection