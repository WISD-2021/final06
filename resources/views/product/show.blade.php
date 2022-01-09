@extends('layouts.master')

@section('title','餐點詳細')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/about-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1 style="color: white">商品詳細</h1>
                        <span class="subheading">Food details.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form action="/cart/store" method="post">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="users_id" value="{{$name}}">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="10%" style="text-align: center">名稱</th>
                            <th width="10%" style="text-align: center">價格</th>
                            <th width="10%" style="text-align: center">容量</th>
                            <th width="10%" style="text-align: center">釀造年數</th>
                            <th width="10%" style="text-align: center">數量</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($product as $product)
                            <tr>
                                <td style="text-align: center;line-height:100px;">
                                    {{$product->name}}
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    ${{$product->price}}
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    {{$product->capacity}}
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    {{$product->year}}
                                </td>
                                <td style="text-align: center;vertical-align: middle;">
                                    <input style="width: 50%;" type="number" name="amount" min="1" max="99" value="1">
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                <div style="text-align:center">
                    <a class="btn btn-sm btn-danger" href="{{route('product')}}">取消</a>
                    &emsp;&emsp;<button type="submit" class="btn btn-sm btn-primary" name="products_id" value="{{$product->id}}">加入購物車</button>
                </div>

            </div>
        </div>
    </div>

@endsection
