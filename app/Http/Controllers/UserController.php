<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class UserController extends Controller
{
    public function login(){
        return view('pages.user.login');
    }
    public function register(){
        return view('pages.user.register');
    }
    public function Authlogin(){
        $customer_id= Session::get('customer_id');
        if($customer_id){
            return Redirect::to('');
        }else{
            return Redirect::to('login')->send();
        }
    }

    public function register_Customer(Request $request){
        $data= array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);
        $data['customer_phone'] = $request->customer_phone;

        $insert_customer=DB::table('tbl_customers')->insertGetId($data);

        return Redirect::to('/login')->with('message','Đăng ký thành công!');
    }

    public function login_Customer(Request $request){
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);

        $result= DB::table('tbl_customers')->where('customer_email',$customer_email)->where('customer_password',$customer_password)->first();

        if($result){
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->customer_name);
            return Redirect::to('/');
        }else{
            return Redirect::to('/login')->with('message','Vui lòng kiểm tra thông tin đăng nhập');
        }
    }

    public function logout_Customer(){
        $this->Authlogin();
        Session::put('customer_name',null);
        Session::put('customer_id',null);
        return Redirect::to('/');
   	}
}