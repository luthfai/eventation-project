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
        // only authenticated users can see this page
        $event = Event::find($slug);
        $event->title = $request->title;
        $event->name1 = $request->name1;
        $event->nickname1 = $request->nickname1;
        $event->name2 = $request->name2;
        $event->nickname2 = $request->nickname2;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->event_date = $request->event_date;
        $event->event_image = $request->event_image;
        $event->event_image_alt = $request->event_image_alt;
        $event->event_image_title = $request->event_image_title;
        $event->event_image_caption = $request->event_image_caption;
        $event->event_video = $request->event_video;
        $event->event_video_alt = $request->event_video_alt;
        $event->event_video_title = $request->event_video_title;
        $event->event_video_caption = $request->event_video_caption;
        $event->event_audio = $request->event_audio;
        $event->event_audio_alt = $request->event_audio_alt;
        $event->event_audio_title = $request->event_audio_title;
        $event->event_audio_caption = $request->event_audio_caption;
        $event->location_url = $request->location_url;
        $event->undangan_id = $request->undangan_id;

        $event->save();
        return redirect()->route('event.edit', $id)->with('success', 'Event updated successfully');
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
}
