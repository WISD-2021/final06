# 系統畫面

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



## ◆後台會員管理
- 查看所有會員，可檢視該會員的資料
  <a href="https://imgur.com/Pz1cLax"><img src="https://i.imgur.com/Pz1cLax.png" title="source: imgur.com" /></a>

## ◆後台餐點管理
- 查看所有餐點，可新增餐點
  <a href="https://imgur.com/DFs3TZx"><img src="https://i.imgur.com/DFs3TZx.png" title="source: imgur.com" /></a>

## ◆後台訂單管理
- 查看所有訂單，包含已完成及準備中之訂單
  <a href="https://imgur.com/XvCa31d"><img src="https://i.imgur.com/XvCa31d.png" title="source: imgur.com" /></a>



## 系統名稱及作用

線上預訂快取系統

- 讓使用者可以不必至店家現場排隊點餐，節省時間

- 詳細的餐點資訊

- 店家可使用這套系統管理會員、餐點及訂單


## 系統的主要功能
★ 前台
- 首頁 (Route::get('/',[HomeController::class, 'index'])->name('home.index');)  [3A732086 胡東霖](https://github.com/3A732086)
- 菜單瀏覽 (Route::get('/products', [ProductController::class, 'index'])->name('products.index');) [3A732086 胡東霖](https://github.com/3A732086)
- 個別餐點資訊 (Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');) [3A732086 胡東霖](https://github.com/3A732086)
- 購物車 (Route::get('/cartlist',[CartController::class,'index'])->middleware('auth')->name('carts.index'); ) [3A732086 胡東霖](https://github.com/3A732086) 、 [3A732087 許家銓](https://github.com/3A732087)
- 訂單查詢 (Route::get('/orderlists',[OrderController::class,'index'])->middleware('auth')->name('orders.index');) [3A732086 胡東霖](https://github.com/3A732086) 、 [3A732087 許家銓](https://github.com/3A732087)

★ 後台
- 會員管理 (Route::get('members', [AdminMemberController::class, 'index'])->name('admin.members.index');) [3A732087 許家銓](https://github.com/3A732087)
- 餐點管理 (Route::get('menus', [AdminMenuController::class, 'index'])->name('admin.menus.index');) [3A732087 許家銓](https://github.com/3A732087)
- 訂單管理 (Route::get('orderlists', [AdminOrderlistController::class, 'index'])->name('admin.orderlists.index'); ) [3A732087 許家銓](https://github.com/3A732087)

## ERD
<a href="https://imgur.com/Upvdt9v"><img src="https://i.imgur.com/Upvdt9v.png" title="source: imgur.com" /></a>


## 關聯式綱要圖
<a href="https://imgur.com/9PG1V0k"><img src="https://i.imgur.com/9PG1V0k.png" title="source: imgur.com" /></a>


## 實際資料表欄位設計

- 使用者 (users)資料表

<a href="https://imgur.com/TFdhtSS"><img src="https://i.imgur.com/TFdhtSS.png" title="source: imgur.com" /></a>

- 產品 (product)資料表

<a href="https://imgur.com/y5ydQrM"><img src="https://i.imgur.com/y5ydQrM.png" title="source: imgur.com" /></a>

- 購物車 (carts)資料表

<a href="https://imgur.com/OVpJgWw"><img src="https://i.imgur.com/OVpJgWw.png" title="source: imgur.com" /></a>

- 訂單主檔 (orderlists)資料表

<a href="https://imgur.com/gtqYIdm"><img src="https://i.imgur.com/gtqYIdm.png" title="source: imgur.com" /></a>

- 訂單明細 (orderdetails)資料表

<a href="https://imgur.com/HQMy2dz"><img src="https://i.imgur.com/HQMy2dz.png" title="source: imgur.com" /></a>


## 初始專案與DB負責的同學

- 初始專案 [3A732086 胡東霖](https://github.com/3A732086)
- DB [3A732086 胡東霖](https://github.com/3A732086) 、 [3A732087 許家銓](https://github.com/3A732087)



## 額外使用的套件或樣板

- 前台樣板：[Modern Business](https://startbootstrap.com/template/modern-business)

        作為前台頁面使用，畫面簡單乾淨

- 後台樣板：[Sidebar](https://startbootstrap.com/template/simple-sidebar)

        作為後台管理使用，介面清楚明瞭，方便操作


## 系統測試資料存放位置

     final11底下的sql資料夾

## 系統使用者測試帳號

★ 前台

     帳號：aaa123123
     密碼：aaa123123

★ 後台

     帳號：admin
     密碼：12345678


## 系統開發人員與工作分配

[3A732086 胡東霖](https://github.com/3A732086)

      前台管理
      初始專案
      DB 
      readme 撰寫
      登入後判斷身分別進入前台或後台
      登入頁面修改
      個人資料頁面修改
      期中報告製作


[3A732087 許家銓](https://github.com/3A732087)

      後台管理
      前台購物車及訂單查詢
      DB
      期中報告製作
        
