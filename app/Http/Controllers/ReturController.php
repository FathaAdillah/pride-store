<?php

namespace App\Http\Controllers;

use App\Models\Retur;
use Illuminate\Http\Request;

class ReturController extends Controller
{
    public function index()
    {
        $returs = Retur::
        orderBY('tanggal', 'desc')
        ->paginate(10);

        return view('pages.retur.index', compact('returs'));
    }

    public function create()
    {
        return view('pages.retur.create');
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

        Retur::create($request->all());

        return redirect()->route('retur.index')
            ->with('success', 'Retur created successfully.');
    }

    public function edit(Retur $retur)
    {
        return view('pages.retur.edit', compact('retur'));
    }

    public function update(Request $request, Retur $retur)
    {
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required',
        ]);

        $retur->update($request->all());

        return redirect()->route('retur.index')
            ->with('success', 'Retur updated successfully');
    }


    public function destroy(Retur $retur)
    {
        $retur->delete();

        return redirect()->route('retur.index')
            ->with('success', 'Retur deleted successfully');
    }

}
