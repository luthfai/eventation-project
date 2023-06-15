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
        $guest = DB::table('guest')->where('id', $id)->first();
        $event = DB::table('events')->where('id', $guest->event_id)->first();
        if ($event->user_id != auth()->user()->id && auth()->user()->role != 'admin') {
            return redirect()->route('no.access');
        }
        return view('user.edit-tamu', compact('guest', 'event'));
    }

    public function update(Request $request, $id)
    {
        $guest = DB::table('guest')->where('id', $id)->first();
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone = $request->phone;
        $guest->status = $request->status;
        // $guest->event_id = $request->event_id;
        DB::table('guest')->where('id', $id)->update([
            'name' => $guest->name,
            'email' => $guest->email,
            'phone' => $guest->phone,
            'status' => $guest->status,
            // 'event_id' => $guest->event_id,
        ]);
        return redirect()->route('dashboard')->with('success', 'Guest updated successfully');
    }

    public function destroy($id)
    {
        DB::table('guest')->where('id', $id)->delete();
        return redirect()->route('dashboard')->with('success', 'Guest deleted successfully');
    }

    public function showGuests($slug)
    {
        // only admin can see this page
        // show all guests
        $event = DB::table('events')->where('slug', $slug)->first();
        if ($event->user_id != auth()->user()->id && auth()->user()->role != 'admin') {
            return redirect()->route('no.access');
        }
        $guests = DB::table('guest')->where('event_id', $event->id)->get();
        return view('user.list-tamu', compact('guests', 'event'));
    }
}
