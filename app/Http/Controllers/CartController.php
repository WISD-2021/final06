<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Item;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Auth::user()->id;
        $carts = DB::table('carts')
            ->join('products', 'carts.products_id', '=', 'products.id')
            ->where('carts.users_id', $name)
            ->select('carts.id', 'products.name', 'carts.amount', 'products.price')
            ->get();
        ['carts'=>$carts];
        $total=0;
        foreach ($carts as $cart)
        {
            $total = ($cart->price)*($cart->amount)+$total;
        }
        #dd($total);
        $data=['carts'=>$carts,'total'=>$total];
        return view('cart.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Cart::create($request->all());
        return redirect()->route('product')->with('status','系統提示：餐點已加入購物車');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart,$id)
    {
        Cart::destroy($id);
        return redirect()->route('cart.index');
    }
    public function final()
    {
        $user=Auth::user();

        /** @var TYPE_NAME $name */
        $name=Auth::user()->name;
        $id=Auth::user()->id;
        $carts = DB::table('carts')
            ->join('products', 'carts.products_id', '=', 'products.id')
            ->where('carts.users_id', $id)
            ->select('carts.id','products.name', 'carts.amount', 'products.price')
            ->get();

        ['carts'=>$carts];

        $total=0;

        foreach ($carts as $cart)
        {
            $total = ($cart->price)*($cart->amount)+$total;
        }

        $data=['name'=>$name,'carts'=>$carts,'total'=>$total,'user'=>$user,'id'=>$id];
        return view('cart.final',$data);
    }

    public function clear()
    {
        $name=Auth::user()->id;

        #dd($carts);

        Order::create([
            'users_id'=>$name,
            'date'=>Carbon::now(),
            'status'=>'未完成',
            'sum'=>0,
            'number'=>0,
        ]);

        $order_id=DB::table('orders')
            ->where('users_id',$name)
            ->orderBy('created_at','desc')
            ->select('id')
            ->first();

        $carts=DB::table('carts')
            ->join('products','carts.products_id','=','products.id')
            ->select('products.id','products.price','amount')
            ->where('carts.users_id',$name)
            ->get();

        ['carts'=>$carts];
        $total=0;
        $sums=0;
        foreach ($carts as $cart)
        {
            Item::create([
                'orders_id'=>$order_id->id,
                'products_id'=>$cart->id,
                'amount'=>$cart->amount,
                'total'=>$cart->price,
            ]);
            $total = ($cart->price)*($cart->amount)+$total;
            $sums=$cart->amount+$sums;
        }
        Cart::where('users_id',$name)->delete();
        Order::where('id',$order_id->id)->update(['sum' =>$total]);

        return redirect()->route('product')->with('status','系統提示：訂單已送出！');
    }
}
