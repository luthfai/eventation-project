<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function SuperDashboard()
    {
        return view('user.dashboard');
    }
}
