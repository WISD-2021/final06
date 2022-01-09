<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationController;
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
#商品詳細頁面
Route::get('/product/show/{id}',[\App\Http\Controllers\ProductController::class,'show'])->name('product.show');
#購物車頁面
Route::get('/cart/index',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
#介紹頁面
Route::get('/information',[\App\Http\Controllers\InformationController::class,'information'])->name('information');


#商品加入購物車
Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');



#後台管理
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',[AdminDashboardController::class,'index'])->name( 'admin.dashboard.index');
    Route::get('products',[AdminController::class,'index'])->name( 'admin.products.index');
    Route::get('products/create',[AdminController::class,'create'])->name('admin.products.create');
    Route::get('products/{id}/edit',[AdminController::class,'edit'])->name('admin.products.edit');
    Route::post('products/store',[AdminController::class,'store'])->name('admin.products.store');
    Route::patch('products/{product}',[AdminController::class,'update'])->name('admin.products.update');
    Route::delete('products/{product}',[AdminController::class,'destroy'])->name('admin.products.destroy');
});
