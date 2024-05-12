<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index() {
        $pengeluarans = Pengeluaran::
        orderBy('id', 'desc')
        ->paginate(5);

        return view('pages.pengeluaran.index',compact('pengeluarans'));
    }
}
