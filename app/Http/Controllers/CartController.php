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
    public function save_Cart(Request $request){
        $cate_products = DB::table('tbl_category_products')->where('category_status','1')->orderby('category_id','desc')->get();
        $productID=$request->productid_hidden;
        $quantity=$request->qty;

        $data = DB::table('tbl_products')->where('product_id',$productID)->get();
        return view('pages.cart.show_cart')->with('category', $cate_products);

    }
}