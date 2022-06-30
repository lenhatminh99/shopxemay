@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container2">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/') }}">Trang chủ</a></li>
                    <li class="active">Đặt hàng</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-10 clearfix">
                    <div class="bill-to">
                        <p style="margin-top: -60px;">Thông tin người nhận</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-one">
                            <form action="{{ URL::to('/save-checkout-customer') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="shipping_email" placeholder="Email">
                                <input type="text" name="shipping_name" placeholder="Họ và tên">
                                <input type="text" name="shipping_address" placeholder="Địa chỉ">
                                <input type="text" name="shipping_phone" placeholder="Số điện thoại">
                                <textarea name="shipping_notes" placeholder="Ghi chú đơn hàng" rows="3"></textarea>
                                <input type="submit" value="Đặt hàng" name="send_order" class="btn btn-primary">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#cart_items-->
@endsection
