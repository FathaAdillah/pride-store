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
}
