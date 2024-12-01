<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $produk = Produk::all();
        return $produk;
    }

    
    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        Produk::create([
            'nama_produk' => 'pensil',
            'harga_produk' => 1000,
            'stok_produk' => 10
        ]);

        return response()->json([
            'message' => 'ok'
        ], 201);
    }

    
    //Display the specified resource.
    public function show(Produk $produk)
    {
    }

    //Show the form for editing the specified resource.
    public function edit(Produk $produk)
    {
        //
    }

    //Update the specified resource in storage.
    public function update(Request $request, Produk $produk)
    {
        //
    }

    //Remove the specified resource from storage.
    public function destroy(Produk $produk)
    {
        //
    }
}
