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
                    <p>M?? s???n ph???m: {{ $product->product_id }}</p>
                    <div class="fb-share-button" data-href="http://localhost/shopxemay/chi-tiet-san-pham/"
                        data-layout="button" data-size="large"><a target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fshopxemay%2Fchi-tiet-san-pham%2F&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore">Chia s???</a></div>
                    <img src="images/product-details/rating.png" alt="" />
                    <form method="post" action="{{ URL::to('/save-cart') }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $product->product_id }}"
                            class="cart_product_id_{{ $product->product_id }}">
                        <input type="hidden" value="{{ $product->product_name }}"
                            class="cart_product_name_{{ $product->product_id }}">
                        <input type="hidden" value="{{ $product->product_image }}"
                            class="cart_product_image_{{ $product->product_id }}">
                        <input type="hidden" value="{{ $product->product_price }}"
                            class="cart_product_price_{{ $product->product_id }}">
                        <input type="hidden" value="1" class="cart_product_qty_{{ $product->product_id }}">
                        <span>
                            <span>{{ number_format($product->product_price) }}??</span>
                            <br />
                            {{-- <label>S??? l?????ng:</label>
                            <input name="qty" type="number" min="1" max="99" value="1" /> --}}
                            <input name="productid_hidden" type="hidden" value="{{ $product->product_id }}" />
                        </span>

                        <p><b>Tr???ng th??i:</b> C??n h??ng</p>
                        <p><b>T??nh tr???ng s???n ph???m:</b> New</p>
                        <button type="button" class="btn btn-default add-to-cart"
                            data-id_product="{{ $product->product_id }}" name="add-to-cart">Th??m v??o
                            gi???</button>
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
                <li><a href="#details" data-toggle="tab">Th??ng tin s???n ph???m</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">????nh gi?? s???n ph???m</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details">
                <div class="col-sm">
                    @foreach ($products as $key => $product)
                        <h3>H??ng s???n xu???t: {{ $product->category_name }}</h3>
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
                    <p>M???i b??nh lu???n sai ph???m s??? b??? kh??a t??i kho???n!</p>
                    <p><b>Vi???t b??nh lu???n</b></p>
                    {{-- <ul>
                        @foreach ($product as $key => $pro)
                            <li><a href=""><i class="fa fa-user"></i>{{ $pro->product_name }}</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2022</a></li>
                        @endforeach
                    </ul> --}}
                    {{-- <p>{{}}</p>
                    <p><b>Vi???t b??nh lu???n</b></p> --}}

                    {{-- <form method="post" action="{{ URL::to('/binh-luan/' . $product->product_id) }}">
                        {{ csrf_field() }} --}}
                    <span>
                        <input type="text" name="customer_name" placeholder="H??? t??n" />
                        <input type="email" name="customer_email" placeholder="?????a ch??? email" />
                    </span>
                    <textarea name="comment_text"></textarea>
                    <b>????nh gi??: </b> <img src="images/product-details/rating.png" alt="" />
                    <button type="submit" class="btn btn-default pull-right">
                        B??nh lu???n
                    </button>
                    {{-- </form> --}}
                </div>
            </div>

        </div>
    </div>
    <!--/category-tab-->
    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">S???n ph???m g???i ??</h2>

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
                                            <p>{{ $product->product_price }} VN??</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Chi
                                                ti???t s???n
                                                ph???m</button>
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
                                            <p>{{ $product->product_price }} VN??</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Chi
                                                ti???t s???n
                                                ph???m</button>
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
