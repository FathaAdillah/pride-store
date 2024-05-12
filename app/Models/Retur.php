<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retur extends Model
{
    use HasFactory;
    protected $table = 'returs';

    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis', 'id');
    }
}
