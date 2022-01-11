@extends('admin.layouts.master')

@section('title', '商品管理')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                訂單管理 <small>所有訂單列表</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 訂單管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="60" style="text-align: center">訂單編號</th>
                        <th width="70" style="text-align: center">購買商品</th>
                        <th width="70" style="text-align: center">總額</th>
                        <th width="70" style="text-align: center">目前狀態</th>
                        <th width="80" style="text-align: center">訂單確認</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($order as $orders)
                        <tr>
                            <td style="text-align: center">{{$orders->id}}</td>
                            <td style="text-align: center">{{$orders->name}}</td>
                            <td style="text-align: center">{{$orders->sum}}</td>
                            <td style="text-align: center">{{$orders->status}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.products.edit', $orders->id) }}">編輯</a>
                                <form action="/admin/products/{{$orders->id}}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->





@endsection
