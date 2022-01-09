@extends('layouts.master')

@section('title','商品頁面')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('images/user_edit_bg.jpeg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1 style="color: white">商品頁面</h1>
                        <span class="subheading">新着商品</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($product as $products)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                             <img class="card-img-top" src="images/{{$products->image}}" height="300px" width="100px">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h3 class="fw-bolder"><b>{{$products->name}}</b></h3>
                                    <!-- Product price-->
                                    售價｜NT.{{$products->price}}/瓶

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('product.show',$products->id)}}">訂購</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
