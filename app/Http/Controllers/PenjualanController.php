<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::
        orderBy('tanggal', 'DESC')
        ->paginate(10);

        return view('pages.penjualan.index', compact('penjualans'));
    }
}
