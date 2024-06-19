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
        'id_sumbers',
        'nominal',
        'jumlah',
        'tanggal',
        'keterangan',
        'id_produk',
    ];

    public function sumber()
    {
        return $this->belongsTo(Sumber::class, 'id_sumbers', 'id');
    }
    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk', 'id');
    }
}
