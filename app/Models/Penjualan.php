<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisProduk;

class Penjualan extends Model
{
    use HasFactory;
    protected $tabel = 'penjualans';


    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis', 'id');
    }
}
