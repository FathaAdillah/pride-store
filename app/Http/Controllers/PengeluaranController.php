<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Sumber;

class PengeluaranController extends Controller
{
    public function index() {
        $pengeluarans = Pengeluaran::
        orderBy('id', 'desc')
        ->paginate(5);

        return view('pages.pengeluaran.index',compact('pengeluarans'));
    }

    public function create() {
        $sumbers = Sumber::all();
        $produks = Produk::all();
        return view('pages.pengeluaran.create', compact('sumbers', 'produks'));
    }

    public function store(Request $request) {
        $request->validate([
            'tanggal' => 'required',
            'sumber_pengeluaran' => 'required',
            'qty' => 'required',
            'nominal' => 'required',
            'keterangan' => 'required',
            'produk' => 'required',
        ]);

        Pengeluaran::create([
            'tanggal' => $request->tanggal,
            'id_sumber' => $request->sumber_pengeluaran,
            'jumlah' => $request->qty,
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
            'id_produk' => $request->produk,
        ]);

        return redirect()->route('pengeluaran.index')
            ->with('success', 'Pengeluaran created successfully.');
    }

    public function edit($id) {
        $pengeluaran = Pengeluaran::find($id);
        $sumbers = Sumber::all();
        $produks = Produk::all();
        return view('pages.pengeluaran.edit', compact('pengeluaran', 'sumbers', 'produks'));
    }

    public function update(Request $request, Pengeluaran $pengeluaran) {
        $request->validate([
            'tanggal' => 'required',
            'id_sumber' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $pengeluaran->update($request->all());

        return redirect()->route('pengeluaran.index')
            ->with('success', 'Pengeluaran updated successfully');
    }

    public function destroy(Pengeluaran $pengeluaran) {
        $pengeluaran->delete();

        return redirect()->route('pengeluaran.index')
            ->with('success', 'Pengeluaran deleted successfully');
    }
}
