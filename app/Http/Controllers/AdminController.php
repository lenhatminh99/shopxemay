<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function Authlogin(){
        $admin_id= Session::get('admin_id');
        if($admin_id){
            Redirect::to('dashboard');
        }else{
            Redirect::to('admin')->send();
        }
    }
    public function index(){
       return view('admin_login');
    }
    public function show_dashboard(){
        $this->Authlogin();
        return view('admin.dashboard');
    }
    public function login(Request $request){
   		$admin_mail = $request->admin_mail;

   		$admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_mail', $admin_mail)->orwhere('admin_password', $admin_password)->first();

        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->with('message','Vui lòng kiểm tra thông tin đăng nhập!');
        }
   	}
   	public function logout(){
           $this->Authlogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');

   	}
}