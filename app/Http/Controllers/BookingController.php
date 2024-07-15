<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // booking page
    public function Booking()
    {
        return view('booking');
    }
}
