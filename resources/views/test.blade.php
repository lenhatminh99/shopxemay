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
    <link rel="shortcut icon" href="{{ asset('public/frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
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
                                    <form action="{{ URL::to('/tim-kiem') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="search_box pull-right">
                                            <input name="keywords_submit" type="text"
                                                placeholder="Tìm kiếm sản phẩm" />
                                            <input style="margin-top: 0;color:black;"type="submit" name="search_items"
                                                class="btn btn-primary btn-sm" value="Tìm kiếm">
                                        </div>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->
        <div class="table-responsive">
            <table class="table b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="m-b-none">

                            </label>
                        </th>
                        <th>Order_details_id</th>
                        <th>Mã đơn hàng</th>
                        <th>Product ID</th>
                        <th>Product price</th>
                        <th>Product name</th>
                        <th>Tổng tiền</th>
                        <th>Product Quantity</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_order as $key => $order)
                        <tr>
                            <td><label class="i-checks m-b-none"></label>
                            </td>
                            <td>{{ $order->order_details_id }}
                            <td>{{ $order->order_id }}
                            <td>{{ $order->product_id }}
                            <td>{{ $order->product_price }}
                            <td>{{ $order->product_name }}
                                {{-- <td>
                                <a href="" class="active" ui-toggle-class="">
                                    <a href="{{ URL::to('/details-order/' . $order->order_id) }}" class="">Nhấn
                                        vào đây</a></a>
                            </td> --}}
                            <td>{{ number_format($order->order_total) }}đ</td>
                            <td>{{ $order->product_sales_quantity }}</td>
                        </tr>
                    @endforeach
                    {{-- <?php
                    $numItems = count($all_order);
                    $i = 0;
                    foreach ($all_order as $key => $order) {
                        if (++$i === $numItems) {
                            echo $order->order_id;
                        }
                    }
                    ?> --}}
                </tbody>
            </table>
        </div>



        <!--/footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="https://www.facebook.com/flamingfury69">Hỗ trợ</a></li>
                                <li><a href="https://www.facebook.com/flamingfury69">Thông tin liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Xem nhanh</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ URL::to('/loc-theo-gia1') }}">Xe giá rẻ</a></li>
                                <li><a href="{{ URL::to('/loc-theo-gia4') }}">Xe mắc tiền</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Điều khoản</h2>
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
                            <h2>Về shop</h2>
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
                            <h2>Để lại lời nhắn</h2>
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form action="{{ URL::to('/save-customer-message') }}" method="post"
                                class="searchform">
                                {{ csrf_field() }}
                                <input name="message_content" type="text" placeholder="Để lại lời nhắn" />
                                <button style="position: absolute;"type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Bạn có tiền <br />Bạn có chúng tôi</p>
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
</body>

</html>
