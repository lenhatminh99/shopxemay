<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class ProductsController extends Controller
{
    //----------------------------------PRODUCTS-----------------------------------

    // return trang Add products
    public function add_Products(){
        $cate_products = DB::table('tbl_category_products')->orderby('category_id','desc')->get();

        return view('admin.add_products')->with('cate_products', $cate_products);
    }


    //click submit them san pham
    public function save_Products(Request $request){
        $data = array();
        $data['product_name'] = $request -> product_name;
        $data['category_id'] = $request -> cate_products;
        $data['product_desc'] = $request -> product_desc;
        $data['product_price'] = $request -> product_price;
        $data['product_status'] = $request -> product_status;

        $get_image =$request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_products')->insert($data);
            return Redirect::to('add-products')->with('message', 'Thêm sản phẩm thành công!');
        }
        $data['product_image'] = '';
        DB::table('tbl_products')->insert($data);
        return Redirect::to('add-products')->with('message', 'Thêm sản phẩm thành công!');
    }

    public function active_Category_Products($category_products_id){
        DB::table('tbl_category_products')->where('category_id', $category_products_id)->update(['category_status' => 0]);
        return Redirect('/list-category-products');
    }

    public function unactive_Category_Products($category_products_id){
        DB::table('tbl_category_products')->where('category_id', $category_products_id)->update(['category_status' => 1]);
        return Redirect('/list-category-products');
    }

}