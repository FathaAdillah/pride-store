<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sumber;

class SumberController extends Controller
{
    public function index()
    {
        $sumbers = Sumber::
            orderBy('id', 'desc')
            ->paginate(5);

        return view('pages.sumber-pengeluaran.index', compact('sumbers'));
    }

    public function create()
    {
        return view('pages.sumber-pengeluaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Sumber::create([
            'name' => $request->name,
        ]);

        return redirect()->route('sumber.index')
            ->with('success', 'Sumber Pengeluaran created successfully.');
    }

    public function edit(Sumber $sumber)
    {
        return view('pages.sumber-pengeluaran.edit', compact('sumber'));
    }

    public function update(Request $request, Sumber $sumber)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $sumber->update([
            'name' => $request->name,
        ]);

        return redirect()->route('sumber.index')
            ->with('success', 'Sumber Pengeluaran updated successfully');
    }

    public function destroy(Sumber $sumber)
    {
        $sumber->delete();
        return redirect()->route('sumber.index')
            ->with('success', 'Sumber Pengeluaran deleted successfully');
    }
}
