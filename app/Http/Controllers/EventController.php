<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// guest model
use App\Models\Guest;
// event model
use App\Models\Event;
//undaangan model
use App\Models\Undangan;
// db
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    // public function index()
    // {
    //     // only authenticated users can see this page

    // }

    public function guest()
    {
        //get token from url and find guest
        $token = request()->token;
        // find event id from
    }

    public function edit()
    {
        $slug = request()->slug;
        $event = DB::table('events')->where('slug', $slug)->first();
        if (!$event) {
            return redirect()->route('dashboard');
        }
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $slug)
    {
        // validate the request
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'place' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        // get the event
        $event = DB::table('events')->where('slug', $slug)->first();

        // check if the user is authorized to update the event
        if ($event->user_id != auth()->user()->id) {
            return redirect()->route('no.access');
        }

        // check if the request has an image
        if ($request->hasFile('image')) {
            // delete the old image
            unlink(public_path('images/' . $event->image));
            // upload the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            // use the old image
            $imageName = $event->image;
        }

        // update the event
        DB::table('events')->where('slug', $slug)->update([
            'name' => $request->name,
            'date' => $request->date,
            'time' => $request->time,
            'place' => $request->place,
            'address' => $request->address,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        // redirect to the dashboard
        return redirect()->route('dashboard');
    }

    // show user events
    public function userShow()
    {
        // only show events that belong to the user
        // add undangan data to events using undangan_id
        // $events = Event::where('user_id', auth()->user()->id)->get();
        $events = DB::table('events')
            ->join('undangans', 'events.undangan_id', '=', 'undangans.id')
            ->select('events.*', 'undangans.name', 'undangans.image')
            ->where('events.user_id', auth()->user()->id)
            ->get();

        return view('user.list-event', compact('events'));
    }

    public function view($slug)
    {
        // only authenticated users can see this page
        $event = DB::table('events')->where('slug', $slug)->first();
        $undangan = DB::table('undangans')->where('id', $event->undangan_id)->first();
        if ($event->user_id != auth()->user()->id) {
            return redirect()->route('no.access');
        }
        return view('undangan.' . $undangan->slug, compact('event'));
    }
}
