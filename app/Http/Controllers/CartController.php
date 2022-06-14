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

        $cate_products = DB::table('tbl_category_products')->where('category_status','1')->orderby('category_id','desc')->get();

        return view('pages.cart.show_cart')->with('category',$cate_products);
    }
    public function add_Cart_Ajax(Request $request){
        $data =$request->all();
        $session_id=substr(md5(microtime()),rand(0,26), 5);
        $cart =Session::get('cart');
        if($cart==true){
            $is_available = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_available++;
                }
            }
            if($is_available==0){
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' =>$data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
            Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' =>$data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
             Session::put('cart',$cart);
        }
        Session::save();
    }
    // public function save_Cart(Request $request){
    //     $productID=$request->productid_hidden;
    //     $quantity=$request->qty;
    //     $product_info = DB::table('tbl_products')->where('product_id',$productID)->get();
    //     $cate_products = DB::table('tbl_category_products')->where('category_status','1')->orderby('category_id','desc')->get();

    //     return view('pages.cart.show_cart')->with('category',$cate_products);

    // }
}