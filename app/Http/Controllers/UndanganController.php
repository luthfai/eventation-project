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
        if (auth()->user()) {
            $undangan = Undangan::find($id);
            return view('pembayaran', compact('undangan'));
        } else {
            $errors = ['login' => 'Silahkan login terlebih dahulu'];
            return redirect()->route('login')->withErrors($errors);

        }
    }

    // preview
    public function preview($id)
    {
        $event = Event::find(1);
        $undangan = Undangan::find($id);
        return view('undangan.' . $undangan->slug, compact('event'));
    }

    public function showTemplates()
    {
        $undangans = Undangan::all();
        return view('admin.template-list', compact('undangans'));
    }

    public function edit($id)
    {
        $undangan = Undangan::find($id);
        return view('admin.template-edit', compact('undangan'));
    }

    public function update(Request $request, $id)
    {
        $undangan = Undangan::find($id);
        $undangan->name = $request->name;
        $undangan->slug = $request->slug;
        $undangan->description = $request->description;
        $undangan->price = $request->price;
        $undangan->kategori = $request->kategori;
        $undangan->save();
        return redirect()->route('admin.templates')->with('success', 'Template updated successfully');
    }

    public function destroy($id)
    {
        $undangan = Undangan::find($id);
        $undangan->delete();
        return redirect()->route('admin.templates')->with('success', 'Template deleted successfully');
    }
}
