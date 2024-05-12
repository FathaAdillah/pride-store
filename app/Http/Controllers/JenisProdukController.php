<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;

class JenisProdukController extends Controller
{
    public function index()
    {
        $jenisproduks = JenisProduk::
            orderBy('id', 'desc')
            ->paginate(5);
        return view('pages.jenis-produk.index', compact('jenisproduks'));
    }
}
