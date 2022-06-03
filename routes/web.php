<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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



//User routes
Route::get('/', [HomeController::class,'index']);

Route::get('/trang-chu', [HomeController::class, 'index']);








//Admin routes
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