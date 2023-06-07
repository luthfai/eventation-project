<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UndanganController extends Controller
{
    // show undangan
    public function show()
    {
        return view('undangan.undangan1');
    }
}
