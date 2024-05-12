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

        return view('pages.sumber.index', compact('sumbers'));
    }
}
