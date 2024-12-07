<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $produk = Produk::select('nama_produk', 'harga_produk')->get();
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
        return $produk;
    }


    //Update the specified resource in storage.
    public function update(Request $request, Produk $produk)
    {
        $produk->update([
            'nama_produk' => 'pensil 2b',
            'harga_produk' => 6000,
            'stok_produk' => 3
        ]);

        return response()->json([
            'message' => 'ok, berhasil di update !'
        ], 202);
    }


    //Remove the specified resource from storage.
    public function destroy(Produk $produk)
    {
        // $produks=Produk::where('id',$produk)->first();
        //return 'halo';

        $produk->delete();

        return response()->json([
            'message' => 'ok, berhasil di musnahkan!'
        ], 202);
    }
}
