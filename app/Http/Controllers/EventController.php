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
        if ($event->user_id != auth()->user()->id) {
            return view('no-access');
        }
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $slug)
    {
        $event = DB::table('events')->where('slug', $slug)->first();
        if ($event->user_id != auth()->user()->id) {
            return redirect()->route('no.access');
        }

        // validate the request
        $request_ = $request->validate([
            'title' => 'required',
            'name1' => 'required',
            'nickname1' => 'required',
            'name2' => 'required',
            'nickname2' => 'required',
            'description' => 'nullable',
            'location' => 'required',
            'event_date' => 'nullable',
            'start_date' => 'required',
            'end_date' => 'required',
            'image1' => 'nullable',
            'image2' => 'nullable',
            'image3' => 'nullable',
            'image4' => 'nullable',
            'video_url' => 'nullable',
            'event_audio' => 'nullable',
            'location_url' => 'nullable',
            'guest_list' => 'nullable',
        ]);

        // start_date = eventdate date + startdate time
        $request_['start_date'] = $request->event_date . ' ' . $request->start_date;
        // end_date = eventdate date + enddate time
        $request_['end_date'] = $request->event_date . ' ' . $request->end_date;
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            // name to slug + random unique
            $filename1 = $slug . '-' . uniqid() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('image/event'), $filename1);
            $request_['image1'] = $filename1;
        }else{
            $request_['image1'] = $event->image1;
        }
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            // name to slug + random unique
            $filename2 = $slug . '-' . uniqid() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('image/event'), $filename2);
            $request_['image2'] = $filename2;
        }else{
            $request_['image2'] = $event->image2;
        }
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            // name to slug + random unique
            $filename3 = $slug . '-' . uniqid() . '.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('image/event'), $filename3);
            $request_['image3'] = $filename3;
        }else{
            $request_['image3'] = $event->image3;
        }
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            // name to slug + random unique
            $filename4 = $slug . '-' . uniqid() . '.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('image/event'), $filename4);
            $request_['image4'] = $filename4;
        }else{
            $request_['image4'] = $event->image4;
        }
        if ($request->hasFile('event_audio')) {
            $event_audio = $request->file('event_audio');
            // name to slug + random unique
            $filename5 = $slug . '-' . uniqid() . '.' . $event_audio->getClientOriginalExtension();
            $event_audio->move(public_path('audio/event'), $filename5);
            $request_['event_audio'] = $filename5;
        }else{
            $request_['event_audio'] = $event->event_audio;
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
                Guest::create([
                    'event_id' => $event->id,
                    'name' => $row[0],
                    'email' => $row[1],
                    'phone' => $row[2],
                ]);
            }
        }
        // update the event
        Event::where('slug', $slug)->update($request_);
        // redirect to dashboard
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
