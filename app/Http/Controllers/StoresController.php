<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Store;
use App\Http\Requests\CreateStoreRequest;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 從 Model 拿資料
        $stores = Store::all();
        // 把資料送給 view
        return view('stores.index')->with('stores', $stores);
    }

    public function eastern()
    {
        // 從 Model 拿資料
        $stores = Store::zone('Eastern Conference')->get();
        // 把資料送給 view
        return view('stores.index')->with('stores', $stores);
    }


    public function western()
    {
        // 從 Model 拿資料
        $stores = Store::zone('Western Conference')->get();
        // 把資料送給 view
        return view('stores.index')->with('stores', $stores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'web' => 'required|string|min:2|max:100',
            
        ], [
            "name.required" => "商店名稱 為必填",
            "name.min" => "商店名稱 至少需2個字元",
            "web.required" => "官網 為必填",
            "web.min" => "官網 至少需2個字元",
           
        ]);

        $name = $request->input('name');
        $web = $request->input('web');
        

        Team::create([
            'name' => $name,
            'web' => $web,
            
        ]);

        return redirect('stores');
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
        $store = Store::findOrFail($id);
        $products = $store->products();
        // 把資料送給 view
        return view ('stores.show',['store'=>$store,'products'=>$products]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        parent::edit($id);  

        $store = Store::findOrFail($id);
        return view('stores.edit', ['store'=>$store]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'web' => 'required|string|min:2|max:100',
            
        ], [
            "name.required" => "商店名稱 為必填",
            "name.min" => "商店名稱 至少需2個字元",
            "web.required" => "官網 為必填",
            "web.min" => "官網 至少需2個字元",
           
        ]);

        $store = Store::findOrFail($id);

        $store->name = $request->input('name');
        $store->web = $request->input('web');

        $store->save();

        return redirect('stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::findOrFail($id);
        $store->delete();
        return redirect('stores');
    }
}