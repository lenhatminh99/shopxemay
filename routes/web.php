<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//-----------------------------------------------------------------User routes-------------------------------------------------------//
Route::get('/', [HomeController::class,'index']);

//home
Route::get('/trang-chu', [HomeController::class, 'index']);

//search
Route::post('/tim-kiem', [HomeController::class, 'Search']);
Route::get('/loc-theo-gia1', [HomeController::class, 'product_By_Price1']);
Route::get('/loc-theo-gia2', [HomeController::class, 'product_By_Price2']);
Route::get('/loc-theo-gia3', [HomeController::class, 'product_By_Price3']);
Route::get('/loc-theo-gia4', [HomeController::class, 'product_By_Price4']);
//show san pham khi click vo danh muc
Route::get('/show-san-pham/{category_id}', [ProductsController::class, 'show_Product']);

//chi tiet san pham
Route::get('/chi-tiet-san-pham/{category_id}', [ProductsController::class, 'product_Details']);

//binh luan
Route::post('/binh-luan/{category_id}', [CommentController::class, 'comment_Text']);

//gio hang - cart
// Route::post('/save-cart', [CartController::class, 'save_Cart']);
Route::post('/add-cart-ajax', [CartController::class, 'add_Cart_Ajax']);
Route::get('/gio-hang', [CartController::class, 'gio_Hang']);

Route::post('/update-cart', [CartController::class, 'update_Cart']);
Route::get('/delete-product-cart/{session_id}', [CartController::class, 'delete_Product_Cart']);
Route::get('/delete-all-product', [CartController::class, 'delete_All_Product']);

Route::get('/checkout', [CartController::class, 'checkout']);
Route::post('/save-checkout-customer', [CartController::class, 'save_Checkout_Customer']);

Route::get('/payment', [CartController::class, 'payment']);
Route::post('/save-payment-customer', [CartController::class, 'save_payment_Customer']);


//login - register
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register-customer', [UserController::class, 'register_Customer']);
Route::post('/login-customer', [UserController::class, 'login_Customer']);
Route::get('/logout-customer', [UserController::class, 'logout_Customer']);



//-----------------------------------------------------------------Admin routes-----------------------------------------------------//
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/admin-dashboard', [AdminController::class, 'login']);



//----------------------------------------------Admin - Category products routes------------------------------------------------//
Route::get('/add-category-products', [CategoryController::class, 'add_Category_Products']);
Route::get('/list-category-products', [CategoryController::class, 'list_Category_Products']);
Route::get('/edit-category-products/{category_products_id}', [CategoryController::class, 'edit_Category_Products']);
Route::get('/delete-category-products/{category_products_id}', [CategoryController::class, 'delete_Category_Products']);

Route::get('/active-category-products/{category_products_id}', [CategoryController::class, 'active_Category_Products']);
Route::get('/unactive-category-products/{category_products_id}', [CategoryController::class, 'unactive_Category_Products']);

Route::post('/save-category-products', [CategoryController::class, 'save_Category_Products']); //them danh muc
Route::post('/update-category-products/{category_products_id}', [CategoryController::class, 'update_Category_Products']);
//------------------------------------------------------------------------------------------------------------------------------------//



//----------------------------------------------Admin - Products routes-----------------------------------------------------------//
Route::get('/add-products',[ProductsController::class,'add_Products']);
Route::get('/list-products',[ProductsController::class,'list_Products']);
Route::get('/edit-products/{products_id}', [ProductsController::class, 'edit_Products']);
Route::get('/delete-products/{products_id}', [ProductsController::class, 'delete_Products']);


Route::get('/active-products/{product_id}', [ProductsController::class, 'active_Products']);
Route::get('/unactive-products/{product_id}', [ProductsController::class, 'unactive_Products']);

Route::post('/save-products', [ProductsController::class, 'save_Products']); //them san pham
Route::post('/update-products/{products_id}', [ProductsController::class, 'update_Products']);


//----------------------------------------------Admin - Order routes-----------------------------------------------------------//
Route::get('/manage-order', [CartController::class, 'manage_Order']);
Route::get('/details-order/{order_id}', [CartController::class, 'details_Order']);
Route::get('/accept-order/{order_id}', [CartController::class, 'accept_Order']);
Route::get('/deny-order/{order_id}', [CartController::class, 'deny_Order']);


Route::get('/customer-message', [AdminController::class, 'show_Customer_Message']);
Route::post('/save-customer-message', [AdminController::class, 'save_Customer_Message']);



//----test
Route::get('/test', [CartController::class, 'test']);