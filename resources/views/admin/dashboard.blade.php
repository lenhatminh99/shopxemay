@extends('admin_layout')
@section('admin_content')
    <?php
    $dem = 1;
    foreach ($all_order as $key => $order) {
        $n = $order->customer_id;
        if ($n <= $n + 1) {
            $dem++;
        }
    }
    ?>
    <h3 style="color: white;">Chào mừng bạn đến với admin panel</h3><br />
    <h3 style="color: white;">Trang quản lý hệ thống shop xe máy Gia Lai</h3>
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Khách hàng</h4>
                    <h3>{{ $dem }}</h3>
                    <p>trên hệ thống</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <?php
                    $dem = 1;

                    foreach ($clients as $key => $client) {
                        $n = $client->customer_id;
                        if ($n <= $n + 1) {
                            $dem++;
                        }
                    }
                    ?>
                    <h4>Tổng đơn hàng</h4>
                    <h3>{{ $order->order_id }}</h3>
                    <p>đã được đặt</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <?php
                    $sum = 0;
                    foreach ($all_order as $key => $order) {
                        $sum += $order->order_total;
                    }
                    ?>
                    <h4>Tổng thu nhập</h4>
                    <h3 style="font-size: 25px; padding-bottom:8px;"><?php echo number_format($sum); ?></h3>
                    <p>trên hệ thống</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Lượt xem trang</h4>
                    <h3>13,500</h3>
                    <p>trên hệ thống</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
@endsection
