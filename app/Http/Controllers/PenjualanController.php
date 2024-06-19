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

    public function create()
    {
        return view('pages.penjualan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required',
        ]);

        Penjualan::create($request->all());

        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan created successfully.');
    }

    public function edit(Penjualan $penjualan)
    {
        return view('pages.penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required',
        ]);

        $penjualan->update($request->all());

        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan updated successfully');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();

        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan deleted successfully');
    }
}
