<?php

namespace App\Http\Controllers;

use App\Models\AdminOrder;
use App\Models\Order;
use App\Http\Requests\StoreAdminOrderRequest;
use App\Http\Requests\UpdateAdminOrderRequest;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::orderBy('created_at', 'DESC')->get();
        $data=['order'=>$orders];
        return view('admin.orders.index', $data);
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
     * @param  \App\Http\Requests\StoreAdminOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function show(AdminOrder $adminOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminOrder $adminOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminOrderRequest  $request
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminOrderRequest $request, AdminOrder $adminOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('admin.order.index');
    }
    public function order()
    {
        $data = DB::table('orders')->get();
        return view('order', ['order' => $data]);
    }
}
