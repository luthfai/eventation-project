<?php

namespace App\Http\Controllers;
// use db
use Illuminate\Support\Facades\DB;
// guest model
use App\Models\Guest;
// event model
use App\Models\Event;
//undaangan model
use App\Models\Undangan;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function create()
    {
        $slug = request()->slug;
        $event = DB::table('events')->where('slug', $slug)->first();
        if (!$event) {
            return redirect()->route('dashboard');
        }
        if ($event->user_id != auth()->user()->id && auth()->user()->role != 'admin') {
            return view('no-access');
        }
        return view('user.add-tamu', compact('event'));
    }
    public function store(Request $request, $slug)
    {
        $event = DB::table('events')->where('slug', $slug)->first();
        if ($event->user_id != auth()->user()->id && auth()->user()->role != 'admin') {
            return redirect()->route('no.access');
        }
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $guest = new Guest();
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone = $request->phone;
        $guest->token = substr(md5(microtime()), rand(0, 26), 5);
        $guest->event_id = $event->id;
        DB::table('guest')->insert([
            'name' => $guest->name,
            'email' => $guest->email,
            'phone' => $guest->phone,
            'token' => $guest->token,
            'event_id' => $guest->event_id,
        ]);

        return route('dashboard');
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

    public function invit($slug, $token)
    {
        $event = DB::table('events')->where('slug', $slug)->first();
        $undangan = Undangan::find($event->undangan_id);
        $guests = DB::table('guest')->where('token', $token)->first();
        if (!$guests) {
            return redirect()->route('no.access');
        }
        return view('undangan.' . $undangan->slug, compact('event', 'guests'));
    }
}
