<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_products = DB::table('tbl_category_products')->where('category_status','1')->orderby('category_id','desc')->get();
        $list_products = DB::table('tbl_products')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

        return view('pages.home')->with('category', $cate_products)->with('list_products', $list_products);
    }
}
