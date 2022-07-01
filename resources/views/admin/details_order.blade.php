 @extends('admin_layout')
 @section('content')
     <div class="table-agile-info">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Chi tiết đơn đặt hàng
             </div>
             @if (session('message'))
                 <div class="alert alert-success">
                     {{ session('message') }}
                 </div>
             @endif
             <div class="table-responsive">
                 <table class="table table-striped b-t b-light">
                     <thead>
                         <tr>
                             <th style="width:20px;">
                                 <label class="m-b-none">

                                 </label>
                             </th>
                             <th>Mã đơn hàng</th>
                             <th>Mã sản phẩm</th>
                             <th>Tên sản phẩm</th>
                             <th>Giá tiền(Chưa bao gồm thuế)</th>
                             <th>Số lượng</th>
                             <th style="width:30px;"></th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($order_details_data as $key => $details)
                             <tr>
                                 <td><label class="i-checks m-b-none"></label>
                                 </td>
                                 <td>{{ $details->order_id }}</td>
                                 <td>{{ $details->product_id }}</td>
                                 <td>{{ $details->product_name }}</td>
                                 <td>{{ number_format($details->product_price) }}đ</td>
                                 <td>{{ $details->product_sales_quantity }}</td>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <footer class="panel-footer">

             </footer>
         </div>
     </div>
 @endsection
