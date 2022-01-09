<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Models\Order;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('created_at', 'DESC')->get();
        $data=['product'=>$products];
        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products=new Product();

        $products->id = $request->id;
        $products->name = $request->name;
        $products->sort = $request->sort;
        $products->price = $request->price;
        $products->capacity = $request->capacity;
        $products->date = $request->brewing_date;
        $products->year = $request->year;
        $products->stock = $request->stock;
        $products->introduce = $request->introduce;
        $products->status = $request->status;

//        抓不到getClientOriginalExtension()
//        $image=$request->file('image');
//        $imgname=time().'.'.$image->getClientOriginalExtension();
//        $request->image->move(public_path('/images'),$imgname);
        $products->image = "暫無商品.png";

        $products->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::find($id);
        $data=['products'=>$products];
        return view('admin.products.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $products=Product::find($id);
        $products->update($request->all());
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.products.index');
    }
    public function product()
    {
        $data = DB::table('products')->get();
        return view('product', ['product' => $data]);
    }

}
