<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('products', [
            'datas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ], [
            'name.required' => 'Nama Produk Wajib di isi'
        ]);

        Product::create($data);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataProduct = Product::find($id);
        return view('edit-product', [
            'data' => $dataProduct
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataProduct = Product::find($id);
        $newData = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ], [
            'name.required' => 'Nama Produk Wajib di isi'
        ]);

        $dataProduct->update($newData);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('/products');
    }
}
