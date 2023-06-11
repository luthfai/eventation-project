<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Undangan;
use App\Models\Event;

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

    public function checkout($id)
    {
        $undangan = Undangan::find($id);
        return view('pembayaran', compact('undangan'));
    }

    // preview
    public function preview($id)
    {
        $event = Event::find(1);
        $undangan = Undangan::find($id);
        return view('undangan.' . $undangan->slug, compact('event'));
    }

}
