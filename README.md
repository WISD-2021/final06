# 系統畫面


## 前台

## ◆首頁
- 圖片幻燈片、導覽列
  <br><a href="https://imgur.com/2P2bkXf"><img src="https://imgur.com/2P2bkXf.png" title="source: imgur.com"/></a>
- 介紹頁面連結
  <br><a href="https://imgur.com/QfqYOp4"><img src="https://imgur.com/QfqYOp4.png" title="source: imgur.com"/></a>
- 暢銷商品瀏覽
  <br><a href="https://imgur.com/rbwgNkB"><img src="https://imgur.com/rbwgNkB.png" title="source: imgur.com"/></a>
- 課程預約
  <br><a href="https://imgur.com/h77NKnN"><img src="https://imgur.com/h77NKnN.png" title="source: imgur.com"/></a>
- 聯絡資訊
  <br><a href="https://imgur.com/Fsr8IkW"><img src="https://imgur.com/Fsr8IkW.png" title="source: imgur.com"/></a>
- 地址
  <br><a href="https://imgur.com/jLfJGgW"><img src="https://imgur.com/jLfJGgW.png" title="source: imgur.com"/></a>
## ◆醬油介紹
- 介紹手工醬油流程
  <br><a href="https://imgur.com/QcEdNGg"><img src="https://imgur.com/QcEdNGg.png" title="source: imgur.com" /></a>

## ◆商品呈現
- 訂購餐點之頁面，可選擇餐點數量
  <br><a href="https://imgur.com/AyWNw8e"><img src="https://imgur.com/AyWNw8e.png" title="source: imgur.com" /></a>

## ◆加入購物車
- 欲訂購之餐點會先加入至購物車內，並顯示小計與總計，也可選擇繼續購物
  <br><a href="https://imgur.com/cPopfa9"><img src="https://imgur.com/cPopfa9.png" title="source: imgur.com" /></a>
  <br><a href="https://imgur.com/EZkM3I2"><img src="https://imgur.com/EZkM3I2.png" title="source: imgur.com" /></a>
## ◆結帳及確認結帳
- 結帳
  <br><a href="https://imgur.com/dGLBl7J"><img src="https://imgur.com/dGLBl7J.png" title="source: imgur.com" /></a>

## ◆訂單資訊
- 可查詢該會員的訂單及詳細資訊，包含歷史訂單
  <br><a href="https://imgur.com/jVgY80S"><img src="https://imgur.com/jVgY80S.png" title="source: imgur.com" /></a>
  <br><a href="https://imgur.com/mFu2426"><img src="https://imgur.com/mFu2426.png" title="source: imgur.com" /></a>
## ◆修改會員資料
- 提供會員修改個人資料
  <br><a href="https://imgur.com/6cf0w2O"><img src="https://imgur.com/6cf0w2O.png" title="source: imgur.com" /></a>

## ◆後台商品管理
- 查看所有商品，可上、下架商品及編輯
  <a href="https://imgur.com/LvEaVf1"><img src="https://imgur.com/LvEaVf1.png" title="source: imgur.com" /></a>

## ◆後台訂單管理
- 查看所有訂單
  <a href="https://imgur.com/ZVm6Dk7"><img src="https://imgur.com/ZVm6Dk7.png" title="source: imgur.com" /></a>

- - -

# 系統名稱及作用

## 手工醬油-安安醬油
* 顧客可以選擇商品、數量進行購買
* 顧客個人資訊有誤，可以修改個人資訊
* 顧客在確認商品無誤後，可以按下結帳進行確認
* 管理者可以上、下架商品，也可以編輯商品上架狀態
* 管理者可以看到目前的訂單
- - -

# 系統的主要功能

## 前台 — [3A832009 陳沛安](https://github.com/3A832009)
* 首頁 | `Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
* 購物車 | `Route::get('/cart/index',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
    * 加入購物車 | `Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');
    * 從購物車內刪除 | `Route::delete('/cart/destroy/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
    * 送出訂單 | `Route::post('/cart/deliver',[\App\Http\Controllers\CartController::class,'deliver'])->name('cart.deliver');
    * 結帳 | `Route::get('/cart/clear',[\App\Http\Controllers\CartController::class,'clear'])->name('cart.clear');
* 訂單紀錄 | `Route::get('/order/history',[\App\Http\Controllers\OrderController::class,'index'])->name('order.history');

- - -
## 前台 — [3A832012 蘇怡瑄](https://github.com/3A832012)
* 修改會員資料 | `Route::patch('/user/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');

## 後台 — [3A832012 蘇怡瑄](https://github.com/3A832012)
* 主控台 | `Route::get('/',[AdminDashboardController::class,'index'])->name( 'admin.dashboard.index');
* 所有餐點 | `Route::get('products',[AdminController::class,'index'])->name( 'admin.products.index');
    * 新增餐點 | `Route::get('products/create',[AdminController::class,'create'])->name('admin.products.create');
    * 編輯餐點 | `Route::get('products/{id}/edit',[AdminController::class,'edit'])->name('admin.products.edit');
    * 刪除餐點 | `Route::delete('products/{product}',[AdminController::class,'destroy'])->name('admin.products.destroy');
* 所有訂單 | `Route::get('orders',[AdminOrderController::class,'index'])->name( 'admin.orders.index');
   
- - -
```
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
#結帳頁面
Route::get('/cart/final',[\App\Http\Controllers\CartController::class,'final'])->name('cart.final');
#訂單頁面
Route::get('/order/history',[\App\Http\Controllers\OrderController::class,'index'])->name('order.history');
#訂單詳細頁面
Route::get('/order/item/{id}',[\App\Http\Controllers\OrderController::class,'show'])->name('order.item');
#介紹頁面
Route::get('/information',[\App\Http\Controllers\InformationController::class,'information'])->name('information');

#商品加入購物車
Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');
#從購物車刪除商品
Route::delete('/cart/destroy/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
#購物車送出訂單
Route::post('/cart/deliver',[\App\Http\Controllers\CartController::class,'deliver'])->name('cart.deliver');
#送出訂單
Route::get('/cart/clear',[\App\Http\Controllers\CartController::class,'clear'])->name('cart.clear');

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
```
- - -
## ERD
![Imgur](https://imgur.com/EJ1ZAds.png)
- - -
## 關聯式綱要圖
![Imgur](https://imgur.com/n1sKlSb.png)
- - -
## 資料表欄位設計
![Imgur](https://imgur.com/hG3ckdQ.jpg)
- - -
![Imgur](https://imgur.com/HOLiCVQ.jpg)
- - -
![Imgur](https://imgur.com/bXe4iVv.jpg)
- - -
![Imgur](https://imgur.com/x6KULOd.jpg)
- - -
![Imgur](https://imgur.com/AABrD6Z.jpg)
- - -
![Imgur](https://imgur.com/2rb2pcA.jpg)
- - -

# 初始專案與DB負責的同學
* 初始專案、資料庫關聯 — [3A832009 陳沛安](https://github.com/3A832009)
* 資料庫建立 — [3A832012 蘇怡瑄](https://github.com/3A832012)
 - - -
## 額外使用的套件或樣板

- 前台樣板：[Modern Business](https://startbootstrap.com/template/modern-business)

        作為前台頁面使用，畫面簡單乾淨

- 後台樣板：[Sidebar](https://startbootstrap.com/template/simple-sidebar)

        作為後台管理使用，介面清楚明瞭，方便操作
- - -
# 系統測試資料存放位置
#### 本專案資料夾final06底下的final06.sql
- - -
# 系統復原
##### 1.複製在Github的專案 https://github.com/WISD-2021/final06.git ，打開Cmder，在www底下輸入：
    git clone https://github.com/WISD-2021/final06.git 

##### 2.進入專案資料夾
    cd final06

##### 3.復原專案三步驟
    composer install
    composer run-script post-root-package-install
    composer run-script post-create-project-cmd

##### 4.打開專案的.env檔案，修改資料庫IP、Port、名稱、密碼及資料庫
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=33060
    DB_DATABASE=final06
    DB_USERNAME=root
    DB_PASSWORD=root

##### 5.登入Adminer，在Admin內匯入final01專案的final01.sql
    資料庫系統：MySQL
    伺服器：localhost:33060
    帳號：root
    密碼：root

##### 6.修改UwAmp的Document Root
    {DOCUMENTPATH}/final06/public
- - -
# 系統使用者測試帳號

## 前台
##### 會員
    帳號：aaa@gmail.com
    密碼：asdasdasd
- - -
## 後台
##### 管理者
    網址:localhost:8000/admin
- - -
# 系統開發人員與工作分配

## 前台 — [3A832009 陳沛安](https://github.com/3A832009)
    ．首頁
    ．購物車
    ．購買紀錄
    ．顯示商品
    ．醬油介紹
    
    ．README編寫
 - - -
## 前台 — [3A832012 蘇怡瑄](https://github.com/3A832012)
    ．修改個人資料

## 後台 — [3A832012 蘇怡瑄](https://github.com/3A832012)
    ．主控台
    ．訂單管理
    ．商品管理

    ．README編寫







