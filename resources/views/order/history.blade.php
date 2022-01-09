@extends('layouts.master')

@section('title','點餐紀錄')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/about-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>點餐紀錄</h1>
                        <span class="subheading">Order record.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                @csrf
                @if(count($orders)>0)

                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="15%" style="text-align: center">訂單編號</th>
                        <th width="20%" style="text-align: center">訂單時間</th>
                        <th width="25%" style="text-align: center">總金額</th>
                        <th width="20%" style="text-align: center">查看詳細</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)

                            <tr>
                                <td style="text-align: center">
                                    {{$order->id}}
                                </td>
                                <td style="text-align: center">
                                    {{$order->date}}<br>
                                </td>
                                <td style="text-align: center">
                                    {{($order->sum)}}
                                </td>
                                <td style="text-align: center">
                                    <a class="btn btn-sm btn-primary" href="{{route('order.item',$order -> id)}}">商品明細</a>
                                </td>
                            </tr>

                    @endforeach
                    </tbody>
                </table>

                @else
                    <div style="text-align: center">
                        您尚未訂購過任何商品
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
