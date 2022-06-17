<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class CartController extends Controller
{
    public function gio_Hang(Request $request){

        $cate_products = DB::table('tbl_category_products')->where('category_status', '1')->orderby('category_id', 'desc')->get();

        return view('pages.cart.show_cart')->with('category', $cate_products);
    }
    public function add_Cart_Ajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');
        if ($cart == true) {
            $is_available = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_id'] == $data['cart_product_id']) {
                    $is_available++;
                }
            }
            if ($is_available == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
            Session::put('cart', $cart);
        }
        Session::save();
    }
    public function delete_Product_Cart($session_id){
        $cart = Session::get('cart');
        if ($cart == true) {
            foreach ($cart as $key =>  $val) {
                if ($val['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return Redirect::back()->with('message', 'Xóa sản phẩm thành công');
        } else {
            return Redirect::back()->with('message', 'Xóa sản phẩm thất bại');
        }
    }
    public function delete_All_Product(){
        $cart = Session::get('cart');
        if($cart==true){
            Session::forget('cart'); //chi delete session card
            return Redirect::back()->with('message', 'Xóa hết giỏ hàng thành công');
        }
    }
    public function update_Cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart == true) {
            foreach ($data['cart_qty'] as $key => $qty) {
                foreach ($cart as $session => $val) {
                    if ($val['session_id'] == $key) {
                        $cart[$session]['product_qty'] = $qty;
                    }
                }
            }
                Session::put('cart', $cart);
                return Redirect::back()->with('message', 'Cập nhật giỏ hàng thành công');
            }else{
                return Redirect::back()->with('message', 'Cập nhật giỏ hàng thất bại');
        }
    }
}