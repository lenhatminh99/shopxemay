<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CommentController extends Controller
{
    public function comment_Text($product_id,Request $request){
        $data = array();
        $data['customer_name'] = $request -> customer_name;
        $data['customer_email'] = $request -> customer_email;
        $data['comment_text'] = $request -> comment_text;
        DB::table('tbl_comments')->insert($data);
        $cate_products = DB::table('tbl_category_products')->where('category_status','1')->orderby('category_id','desc')->get();
        $products = DB::table('tbl_products')
        ->join('tbl_comments','tbl_comments.product_id', '=','tbl_products.product_id')
        ->where('tbl_products.product_id',$product_id)->get();
        return view('pages.product.product_details')->with('products', $products)->with('category', $cate_products);
    }
}