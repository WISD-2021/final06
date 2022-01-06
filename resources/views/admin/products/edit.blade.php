@extends('admin.layouts.master')

@section('title', '編輯商品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯商品 <small>編輯商品內容</small>
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
        <form action="/admin/products/{{$products->id}}" method="POST" role="form">
            @method('PATCH')
            @csrf

            <!--名稱-->
            <div class="form-group">
                <label for="name">商品名稱：</label>
                <input id="name" name="name" class="form-control" placeholder="請輸入商品名稱" value="{{old('name',$products->name)}}">
            </div>
            <!--類型-->
            <div class="form-group">
                <label for="sort">類型：</label>
                <select id="sort" name="sort" class="form-control" value="{{old('name',$products->sort)}}">
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
                <input id="price" name="price" class="form-control" placeholder="請輸入商品價格" value="{{old('name',$products->price)}}">
            </div>
            <!--容量-->
            <div class="form-group">
                <label for="capacity">容量：</label>
                <input id="capacity" name="capacity" class="form-control" placeholder="請輸入商品容量" value="{{old('name',$products->capacity)}}">
            </div>
            <!--釀造日期-->
            <div class="form-group">
                <label for="date">釀造日期：</label>
                <input id="date" name="date" type="date" class="form-control" value="{{old('name',$products->date)}}">
            </div>
            <!--年份-->
            <div class="form-group">
                <label for="year">年份：</label>
                <input id="year" name="year" class="form-control" placeholder="請輸入商品年份" value="{{old('name',$products->year)}}">
            </div>
            <!--庫存量-->
            <div class="form-group">
                <label for="stock">庫存量：</label>
                <input id="stock" name="stock" class="form-control" placeholder="請輸入庫存量" value="{{old('name',$products->stock)}}">
            </div>
            <!--介紹-->
            <div class="form-group">
                <label for="introduce">商品介紹：</label>
                <textarea id="introduce" name="introduce" class="form-control" rows="10">{{old('name',$products->introduce)}}</textarea>
            </div>
            <!--狀態-->
            <div class="form-group">
                <label for="status">狀態：</label>
                <select id="status" name="status" class="form-control" value="{{old('name',$products->status)}}">
                    <option value="已上架">已上架</option>
                    <option value="待上架">待上架</option>
                </select>
            </div>
            <!--更新按鈕-->
            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
