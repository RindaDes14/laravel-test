<?php

use App\Http\Controllers\MahasiswaControler;
use App\Http\Controllers\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa', [MahasiswaControler::class, 'index']);

// Route::post('/produk', [ProdukController::class, 'store']);

// Route::get('/produk', [ProdukController::class, 'index']);

// Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);

// Route::get('/produk/{produk}', [ProdukController::class, 'show']);

// Route::put('/produk/{produk}', [ProdukController::class, 'update']);

Route::resource('/produk', ProdukController::class);
