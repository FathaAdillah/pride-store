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

    public function create()
    {
        return view('pages.jenis-produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        JenisProduk::create($request->all());

        return redirect()->route('jenis-produk.index')
            ->with('success', 'Jenis Produk created successfully.');
    }

    public function edit(JenisProduk $jenisproduk)
    {
        return view('pages.jenis-produk.edit', compact('jenisproduk'));
    }

    public function update(Request $request, JenisProduk $jenisproduk)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $jenisproduk->update($request->all());

        return redirect()->route('jenis-produk.index')
            ->with('success', 'Jenis Produk updated successfully');
    }

    public function destroy(JenisProduk $jenisproduk)
    {
        $jenisproduk->delete();

        return redirect()->route('jenis-produk.index')
            ->with('success', 'Jenis Produk deleted successfully');
    }

}
