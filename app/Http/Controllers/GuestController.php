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
    public function createCSV()
    {
        $slug = request()->slug;
        $event = DB::table('events')->where('slug', $slug)->first();
        if (!$event) {
            return redirect()->route('dashboard');
        }
        if ($event->user_id != auth()->user()->id && auth()->user()->role != 'admin') {
            return view('no-access');
        }
        return view('user.add-tamu-CSV', compact('event'));
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
    public function storeCSV(Request $request, $slug)
    {
        $event = DB::table('events')->where('slug', $slug)->first();
        if ($event->user_id != auth()->user()->id && auth()->user()->role != 'admin') {
            return redirect()->route('no.access');
        }

        if ($request->hasFile('guest_list')) {
            // check if extension is csv
            $guest_list = $request->file('guest_list');
            // check if extension is csv
            $extension = $guest_list->getClientOriginalExtension();
            if ($extension != 'csv') {
                return redirect()->back()->with('error', 'File harus berupa csv');
            }
            // name to slug + random unique
            $filename6 = $slug . '-' . uniqid() . '.' . $guest_list->getClientOriginalExtension();
            $guest_list->move(public_path('csv'), $filename6);
            // import csv to database
            $file = public_path('csv/' . $filename6);
            $csv = array_map('str_getcsv', file($file));
            $csv = array_map('array_filter', $csv);
            $csv = array_filter($csv);
            // delete first row
            unset($csv[0]);
            // insert to database
            foreach ($csv as $row) {
                DB::table('guest')->insert([
                    'name' => $row[0],
                    'email' => $row[1],
                    'phone' => $row[2],
                    'token' => substr(md5(microtime()), rand(0, 26), 5),
                    'event_id' => $event->id,
                ]);
            }
        }
    return redirect()->route('dashboard')->with('success', 'Guests added successfully');
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
