@extends('admin_layout')
@section('admin_content')
    <h3 style="color: white;">Chào mừng bạn đến với admin panel</h3><br />
    <h3 style="color: white;">Trang quản lý hệ thống shop xe máy Gia Lai</h3>
    <?php
    $numItems = count($all_order);
    $i = 0;
    foreach ($all_order as $key => $order) {
        if (++$i === $numItems) {
            echo $order->order_id;
        }
    }
    ?>
@endsection
