@extends('layouts.master')

@section('title','醬油介紹')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('images/user_edit_bg.jpeg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1 style="color: white">醬油介紹</h1>
                        <span class="subheading">Soy sauce introduction.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--介紹-->

    {{--第一步--}}
    <div class="rectangle">
        <div class="rectangle-left" style="background-image: url('{{asset('images/slider-01.jpg')}}');"></div>
        <div class="rectangle-text-right">
            <div class="title-box">
                <h2>一、黑豆</h2>
                <p>分為泡豆、洗豆、蒸豆</p>
                <p>將黑豆洗淨放進蒸練機進行蒸豆</p>
                <p>蒸好的黑豆放置陰涼處冷卻</p>
                <p>在過程中要檢查是否結塊的黑豆</p>
            </div>
        </div>
    </div>

    {{--第二步--}}
    <div class="rectangle">
        <div class="rectangle-right" style="background-image: url('{{asset('images/step2.jpg')}}');"></div>
        <div class="rectangle-text-left">
            <div class="title-box">
                <h2>二、製麴</h2>
                <p>放涼後加入麴菌進行發酵</p>
                <p>麴菌加上米糠攪拌，更容易擴散麴菌</p>
                <p>接著放入製麴室發酵4~5天後，進行洗麴</p>
                <p>洗去麴菌是為了避免麴菌影響醬油口感</p>
            </div>
        </div>
    </div>

    {{--第三步--}}
    <div class="rectangle">
        <div class="rectangle-left" style="background-image: url('{{asset('images/step3.jpg')}}');"></div>
        <div class="rectangle-text-right">
            <div class="title-box">
                <h2>三、釀造</h2>
                <p>先將黑豆和鹽巴混和均勻</p>
                <p>完成後放入甕裡靜置六個月以上</p>
                <p>不加入水的釀造方法稱為乾式釀造</p>
            </div>
        </div>
    </div>

    {{--第四步--}}
    <div class="rectangle">
        <div class="rectangle-right" style="background-image: url('{{asset('images/step4.jpg')}}');"></div>
        <div class="rectangle-text-left">
            <div class="title-box">
                <h2>四、柴燒</h2>
                <p>把甕裡的黑豆拿出來</p>
                <p>上層的鹽塊挖開丟棄</p>
                <p>放入鍋前將黑豆過篩，篩去多餘的鹽巴</p>
                <p>放入鍋中開始煮豆8~10小時</p>
                <p>過程中要不斷攪拌避免烤焦</p>
            </div>
        </div>
    </div>

    {{--第五步--}}
    <div class="rectangle">
        <div class="rectangle-left" style="background-image: url('{{asset('images/step5.jpg')}}');"></div>
        <div class="rectangle-text-right">
            <div class="title-box">
                <h2>五、壓榨</h2>
                <p>壓榨出的即是生醬油</p>
                <p>生醬油靜置三至四日，使醬油及沉澱物分離</p>
                <p>將生醬油柴燒，可殺菌及抑制酵素的活性</p>
                <p>穩定色澤、香氣和味道</p>
            </div>
        </div>
    </div>

    {{--第六步--}}
    <div class="rectangle" style="margin-bottom: 100px">
        <div class="rectangle-right" style="background-image: url('{{asset('images/step6.jpg')}}');"></div>
        <div class="rectangle-text-left">
            <div class="title-box">
                <h2>六、包裝</h2>
                <p>將醬油充填、封蓋、貼標及打印日期後</p>
                <p>放到市面上販售</p>
            </div>
        </div>
    </div>

@endsection
