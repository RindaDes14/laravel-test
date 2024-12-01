<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    //cara mengkoneksi model dengan tabel
    protected $table = 'mahasiswa';
    //data kolom yang tidak boleh di isi
    protected $guarded = ['id'];
    
    //data kolom yang boleh di isi
    // protected $fillable = [
    //     'nama', 
    //     'umur', 
    //     'jenis_kelamin', 
    //     'tinggi_badan',
    //     'tahun',
    //     'tanggal_lahir'
    // ];
}
