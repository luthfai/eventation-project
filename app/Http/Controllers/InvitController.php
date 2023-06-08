<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// db
use Illuminate\Support\Facades\DB;

class InvitController extends Controller
{
    // guest handler
    public function guest()
    {
        //get token from url and find guest
        $token = request()->token;
        // find event id from invits table with token
        $event_id = DB::table('invits')->where('token', $token)->value('event_id');
        // find event with event id
        $event = DB::table('events')->where('id', $event_id)->first();
        // find guest id from invits table with token
        $guest_id = DB::table('invits')->where('token', $token)->value('guest_id');
        // find guest with guest id
        $guest = DB::table('guest')->where('id', $guest_id)->first();
        // find undangan with event id
        $undanganname = DB::table('undangan')->where('id', $event->undangan_id)->value('name');
        // return view undangan.[undanganname]
        return view('undangan.' . $undanganname, compact('event', 'guest'));
    }
}
