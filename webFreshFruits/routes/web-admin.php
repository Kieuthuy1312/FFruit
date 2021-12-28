<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('Fontend.single-product');
});


Route::get('/Login',[AuthController::class, 'showLoginForm']);
Route::post('/Login',[AuthController::class, 'login']);
Route::get('/Register',[AuthController::class, 'showRegisterForm']);
Route::post('/Register',[AuthController::class, 'register']);
Route::get('/Logout',[AuthController::class, 'logout']);

// Categories
Route::get('/Categories',[CategoryController::class, 'index']);
Route::get('/show_create_category',[CategoryController::class, 'showCreateCategory']);
Route::post('/Categories',[CategoryController::class, 'createCategory']);
Route::get('/unactive_category_{id}',[CategoryController::class, 'unactiveCategory']);
Route::get('/active_category_{id}',[CategoryController::class, 'activeCategory']);
Route::get('/show_update_category_{id}',[CategoryController::class, 'showUpdateCategory']);
Route::post('/Categories_{id}',[CategoryController::class, 'updateCategory']);
Route::get('/Categories_{id}',[CategoryController::class, 'delete']);

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

// Bills
Route::get('/Bills',[BillController::class, 'index']);



Route::get('/dashboard',function(){
    return view('Backend.dashboard.dashboard');
});
Route::get('/roles/show_create_role',[RoleController::class, 'showCreateForm']);
Route::post('/roles',[RoleController::class, 'create']);
// Route::get('/roles/{id}/update',[CategoryController::class, 'show'])->name("category-detail");
Route::get('/roles/{id}/edit',[RoleController::class, 'showUpdateForm']);
Route::post('/Categories/{id}/update',[CategoryController::class, 'update']);
Route::get('/Categories/{id}/delete',[CategoryController::class, 'delete']);
// Route::get('/Admin')

// Route::get('/home')