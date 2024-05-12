<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::
        orderBy('id_jenis_produk','desc')
        ->paginate(10);

        return view('pages.produk.index', compact('produks'));
    }
}
