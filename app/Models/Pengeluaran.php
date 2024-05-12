<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sumber;
use App\Models\JenisProduk;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluarans';
    protected $fillable = [
        'id_sumber',
        'nominal',
        'jumlah',
        'tanggal',
        'id_jenis_produk',
    ];

    public function sumber()
    {
        return $this->belongsTo(Sumber::class, 'id_sumber', 'id');
    }
    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk', 'id');
    }
}
