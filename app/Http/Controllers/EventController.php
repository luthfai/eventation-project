<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// guest model
use App\Models\Guest;
// event model
use App\Models\Event;

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
        // only authenticated users can see this page
        $event = Event::find(request()->id);
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        // only authenticated users can see this page
        $event = Event::find($id);
        return redirect()->route('event.edit', $id)->with('success', 'Event updated successfully');
    }
}
