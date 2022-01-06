@extends('admin.layouts.master')

@section('title', '新增商品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增商品 <small>請輸入商品資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 商品管理
            </li>
        </ol>
    </div>
</div>

<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/products/store" method="POST" role="form" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <!--名稱-->
            <div class="form-group">
                <label for="name">商品名稱：</label>
                <input id="name" name="name" class="form-control" placeholder="請輸入商品名稱">
            </div>
            <!--類型-->
            <div class="form-group">
                <label for="sort">類型：</label>
                <select id="sort" name="sort" class="form-control">
                    <option value="經典系列">經典系列</option>
                    <option value="米粒醬油">米粒醬油</option>
                    <option value="味噌醬油">味噌醬油</option>
                    <option value="濁水琥珀">濁水琥珀</option>
                    <option value="裸醬">裸醬</option>
                </select>
            </div>
            <!--價格-->
            <div class="form-group">
                <label for="price">價格：</label>
                <input id="price" name="price" class="form-control" placeholder="請輸入商品價格">
            </div>
            <!--容量-->
            <div class="form-group">
                <label for="capacity">容量：</label>
                <input id="capacity" name="capacity" class="form-control" placeholder="請輸入商品容量">
            </div>
            <!--釀造日期-->
            <div class="form-group">
                <label for="brewing_date">釀造日期：</label>
                <input id="brewing_date" name="brewing_date" type="date" class="form-control">
            </div>
            <!--年份-->
            <div class="form-group">
                <label for="year">年份：</label>
                <input id="year" name="year" class="form-control" placeholder="請輸入商品年份">
            </div>
            <!--庫存量-->
            <div class="form-group">
                <label for="stock">庫存量：</label>
                <input id="stock" name="stock" class="form-control" placeholder="請輸入庫存量">
            </div>
            <!--介紹-->
            <div class="form-group">
                <label for="introduce">商品介紹：</label>
                <textarea id="introduce" name="introduce" class="form-control" rows="10"></textarea>
            </div>
            <!--狀態-->
            <div class="form-group">
                <label for="status">狀態：</label>
                <select id="status" name="status" class="form-control">
                    <option value="已上架">已上架</option>
                    <option value="待上架">待上架</option>
                </select>
            </div>
            <!--圖片-->
{{--            <div class="form-group">--}}
{{--                <label for="image">圖片</label>--}}
{{--                <input type = "file" name="image" class="form-control" >--}}
{{--            </div>--}}
            <!--新增按鈕-->
            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
