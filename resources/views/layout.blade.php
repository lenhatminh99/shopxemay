<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Xe Máy Gia Lai</title>
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/sweetalert.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ 'public/frontend/images/ico/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ 'public/frontend/images/ico/apple-touch-icon-144-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ 'public/frontend/images/ico/apple-touch-icon-114-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ 'public/frontend/images/ico/apple-touch-icon-72-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ 'public/frontend/images/ico/apple-touch-icon-57-precomposed.png' }}">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 909 472 846</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> admin@xemaygialai.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <div class="">
                                    <div class="search_box pull-right">
                                        <input type="text" placeholder="Tìm kiếm sản phẩm" />
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ URL::to('/trang-chu') }}"><img
                                    src="{{ asset('public/frontend/images/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                @if (Session::get('customer_id') == true && Session::get('shipping_id') == true)
                                    <li><a href="{{ URL::to('/payment') }}"><i class="fa fa-crosshairs"></i> Thanh
                                            toán</a></li>
                                    <li><a href="{{ URL::to('/gio-hang') }}"><i class="fa fa-shopping-cart"></i> Giỏ
                                            hàng</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <span class="username"></span>
                                            <?php
                                            $fail_message = Session::get('customer_name');
                                            if ($fail_message) {
                                                echo $fail_message;
                                            }
                                            ?>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu extended logout">
                                            <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                                            <li><a href="{{ URL::to('/logout-customer') }}"><i
                                                        class="fa fa-key"></i>Đăng
                                                    xuất</a></li>
                                        </ul>
                                    </li>
                                @elseif (Session::get('customer_id') == true && Session::get('shipping_id') == false)
                                    <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-crosshairs"></i> Thanh
                                            toán</a></li>
                                    <li><a href="{{ URL::to('/gio-hang') }}"><i class="fa fa-shopping-cart"></i> Giỏ
                                            hàng</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <span class="username"></span>
                                            <?php
                                            $fail_message = Session::get('customer_name');
                                            if ($fail_message) {
                                                echo $fail_message;
                                            }
                                            ?>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu extended logout">
                                            <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                                            <li><a href="{{ URL::to('/logout-customer') }}"><i
                                                        class="fa fa-key"></i>Đăng
                                                    xuất</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ URL::to('/login') }}"><i class="fa fa-crosshairs"></i> Thanh
                                            toán</a></li>
                                    <li><a href="{{ URL::to('/gio-hang') }}"><i class="fa fa-shopping-cart"></i> Giỏ
                                            hàng</a></li>
                                    <li><a href="{{ URL::to('/login') }}"><i class="fa fa-user"></i>
                                            Đăng nhập</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1>Xe Máy Gia Lai</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('public/frontend/images/wave.jpg') }}"
                                        class="girl img-responsive" alt="" />
                                    <img src="{{ asset('public/frontend/images/pricing.png') }}" class="pricing"
                                        alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('public/frontend/images/girl2.jpg') }}"
                                        class="girl img-responsive" alt="" />
                                    <img src="{{ asset('public/frontend/images/pricing.png') }}" class="pricing"
                                        alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('public/frontend/images/girl3.jpg') }}"
                                        class="girl img-responsive" alt="" />
                                    <img src="{{ asset('public/frontend/images/pricing.png') }}" class="pricing"
                                        alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">

                            @foreach ($category as $key => $cate)
                                <!--category-products-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="{{ URL::to('/show-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--/category-products-->
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ 'public/frontend/images/iframe1.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ 'public/frontend/images/iframe2.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ 'public/frontend/images/iframe3.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ 'public/frontend/images/iframe4.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{ 'public/frontend/images/map.png' }}" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2022 Xe Máy Gia Lai Inc. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="{{ asset('public/frontend/js/sweetalert.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url('/add-cart-ajax') }}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token
                    },
                    success: function() {
                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{ url('/gio-hang') }}";
                            });
                    }
                });
            });
        });
        $('input.chk').on('change', function() {
            $('input.chk').not(this).prop('checked', false);
        });
    </script>
</body>

</html>
