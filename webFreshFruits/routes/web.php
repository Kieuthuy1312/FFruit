<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
  

//Account
Route::get('/login_admin',[AuthController::class, 'showLoginForm']);
Route::post('/login_admin',[AuthController::class, 'login_admin']);
Route::get('/register',[AuthController::class, 'showRegisterForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/logout',[AuthController::class, 'logout']);
Route::get('/account',[AuthController::class, 'showAccountForm']);
Route::post('/account',[AuthController::class, 'account']);

// BACKEND

// Categories
Route::get('/Categories',[CategoryController::class, 'index']);
Route::get('/show_create_category',[CategoryController::class, 'showCreateCategory']);
Route::post('/Categories',[CategoryController::class, 'createCategory']);
Route::get('/unactive_category_{id}',[CategoryController::class, 'unactiveCategory']);
Route::get('/active_category_{id}',[CategoryController::class, 'activeCategory']);
Route::get('/show_update_category_{id}',[CategoryController::class, 'showUpdateCategory']);
Route::post('/Categories_{id}',[CategoryController::class, 'updateCategory']);
Route::get('/Categories_{id}',[CategoryController::class, 'delete']);
Route::get('/shop',[CategoryController::class, 'show']);


// Brands
Route::get('/Brands',[BrandController::class, 'index']);
Route::get('/show_create_brand',[BrandController::class, 'showCreateBrand']);
Route::post('/Brands',[BrandController::class, 'createBrand']);
Route::get('/unactive_brand_{id}',[BrandController::class, 'unactiveBrand']);
Route::get('/active_brand_{id}',[BrandController::class, 'activeBrand']);
Route::get('/show_update_brand_{id}',[BrandController::class, 'showUpdateBrand']);
Route::post('/Brands_{id}',[BrandController::class, 'updateBrand']);
Route::get('/Brands_{id}',[BrandController::class, 'delete']);

// Products
Route::get('/Products',[ProductController::class, 'index']);
Route::get('/show_create_product',[ProductController::class, 'showCreateProduct']);
Route::post('/Products',[ProductController::class, 'createProduct']);
Route::get('/unactive_product_{id}',[ProductController::class, 'unactiveProduct']);
Route::get('/active_product_{id}',[ProductController::class, 'activeProduct']);
Route::get('/show_update_product_{id}',[ProductController::class, 'showUpdateProduct']);
Route::post('/Products_{id}',[ProductController::class, 'updateProduct']);
Route::get('/Products_{id}',[ProductController::class, 'delete']);
Route::get('/shop',[ProductController::class, 'showProduct']);
Route::get('/product_detail_{id}',[ProductController::class, 'showProductDetail']);


// Bills
Route::get('/Bills',[BillController::class, 'index']);


// Home
Route::get('/',[IndexController::class, 'index']);

// cart
Route::get('/add_cart_{id}',[CartController::class, 'addCart']);
Route::get('/delete_item_cart_{id}',[CartController::class, 'deleteItemCart']);
Route::get('/delete_item_list_cart/{id}',[CartController::class, 'deleteItemListCart']);
Route::get('/list_cart',[CartController::class, 'viewListCart']);
Route::post('/save-all',[CartController::class, 'saveListCart']);



// FONTEND

// Route::get('/', function () {
//     return view('Fontend.home');
// });
Route::get('/a', function () {
    return view('Backend.layouts.main1');
});
Route::get('/checkout', function () {
    return view('Fontend.checkout');
});
Route::get('/contact', function () {
    return view('Fontend.contact');
});


Route::get('/error', function () {
    return view('Fontend.404');
});
