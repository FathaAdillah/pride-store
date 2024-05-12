<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';

    // protected $fillable = [
    //     'id_jenis_produk',
    //     'nama_produk',
    //     'harga_beli',
    //     'jumlah',
    // ];

    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk', 'id');
    }
}
