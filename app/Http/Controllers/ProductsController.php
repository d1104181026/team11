<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use App\Http\Requests\CreateProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 從 Model 拿資料
        $products = Product::all();
        // 把資料送給 view
        return view ('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::orderBy('stores.id', 'asc')->pluck('stores.name', 'stores.id');
        return view('products.create', ['teams' =>$stores, 'storeSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $name = $request->input('name');
        $tid = $request->input('tid');
        $price = $request->input('price');
        $discount = $request->input('discount');
        $inventory = $request->input('inventory');
        

        $product = Product::create([
            'name'=>$name,
            'tid'=>$tid,
            'price'=>$price,
            'discount'=>$discount,
            'inventory'=>$inventory]);

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 從 Model 拿資料
        $product = Product::findOrFail($id);
        // 把資料送給 view
        return view ('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $stores = Store::orderBy('stores.id', 'asc')->pluck('stores.name', 'stores.id');
        $selected_tags = $product->store->id;
        return view('products.edit', ['product' =>$product, 'stores' => $stores, 'storeSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductRequest $request, $id)
    {
        $product = Player::findOrFail($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->tid = $request->input('tid');
        $product->inventory = $request->input('inventory');
        $product->save();

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products');
    }
}
