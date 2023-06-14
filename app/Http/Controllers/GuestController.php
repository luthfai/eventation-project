<?php

namespace App\Http\Controllers;
// use db
use Illuminate\Support\Facades\DB;
// guest model
use App\Models\Guest;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        $guest = new Guest();
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone = $request->phone;
        $guest->save();
        return redirect()->route('guest.index')->with('success', 'Guest added successfully');
    }

    public function edit($id)
    {
        $guest = Guest::find($id);
        return view('guest.edit', compact('guest'));
    }

    public function update(Request $request, $id)
    {
        $guest = Guest::find($id);
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone = $request->phone;
        $guest->save();
        return redirect()->route('guest.index')->with('success', 'Guest updated successfully');
    }

    public function destroy($id)
    {
        $guest = Guest::find($id);
        $guest->delete();
        return redirect()->route('guest.index')->with('success', 'Guest deleted successfully');
    }

    public function showTamus()
    {
        // for each event that has been created by the user (auth()->user()->id) get the guests
        $events = DB::table('events')->where('user_id', auth()->user()->id)->get();
        $guests = [];
        foreach ($events as $event) {
            $guest = DB::table('guest')->where('event_id', $event->id)->get();
            array_push($guests, $guest);
        }
        return view('user.list-tamu', compact('guests'));
    }
}
