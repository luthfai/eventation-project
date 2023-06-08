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
}
