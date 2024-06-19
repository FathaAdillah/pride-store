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
    public function create()
    {
        return view('pages.produk.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_jenis_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')
            ->with('success', 'Produk created successfully.');
    }
    public function edit(Produk $produk)
    {
        return view('pages.produk.edit', compact('produk'));
    }
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_jenis_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.index')
            ->with('success', 'Produk updated successfully');
    }
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Produk deleted successfully');
    }
}
