<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $table ='detail_transaksi';
    protected $guarded = ['id'];

    public function transaksi() {
        return $this -> belongsTo(Transaksi::class);
    }
    public function produk() {
        return $this->belongsTo(Produk::class);
    }
}
