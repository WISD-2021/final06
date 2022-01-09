<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::resource('orders', OrderController::class);
Route::resource('products', ProductController::class);
Route::resource('details', DetailController::class);
Route::resource('admins', AdminController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
#修改會員資料頁面
Route::get('/user/edit',[\App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
#更新會員資料
Route::patch('/user/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');
#商品頁面
Route::get('/product',[\App\Http\Controllers\ProductController::class,'product'])->name('product');
#後台管理
Route::group(['prefix' => 'admin'], function() {
    #首頁
    Route::get('/',[AdminDashboardController::class,'index'])->name( 'admin.dashboard.index');
    #商品列表
    Route::get('products',[AdminController::class,'index'])->name( 'admin.products.index');
    #增加新商品
    Route::get('products/create',[AdminController::class,'create'])->name('admin.products.create');
    #編輯商品資訊
    Route::get('products/{id}/edit',[AdminController::class,'edit'])->name('admin.products.edit');
    #
    Route::post('products/store',[AdminController::class,'store'])->name('admin.products.store');
    #
    Route::patch('products/{product}',[AdminController::class,'update'])->name('admin.products.update');
    #刪除商品
    Route::delete('products/{product}',[AdminController::class,'destroy'])->name('admin.products.destroy');
    #訂單列表
    Route::get('orders',[AdminOrderController::class,'index'])->name( 'admin.orders.index');
});


