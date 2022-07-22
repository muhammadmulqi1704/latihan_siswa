<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    public $fillable = ['nama_pembeli','tgl_pembelian','nama_barang','harga_satuan','jumlah_barang','total_harga'];
    //membuat fitur created_at(kapan data di buat) & updated_at (kapan data diedit)
    //aktif
    public $timestamps =true;
}
