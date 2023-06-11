<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Undangan;

class UndanganController extends Controller
{
    // show undangan
    public function katalog()
    {
        $undangans = Undangan::all();
        return view('katalog-undangan', compact('undangans'));
    }

    // undangan detail

    public function detail($id)
    {
        $undangan = Undangan::find($id);
        return view('detail-undangan', compact('undangan'));
    }

    // undangan user

}
