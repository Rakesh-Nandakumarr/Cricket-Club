<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function Booking()
    {
        $events = [];
 
        $Bookings = Booking::all();
 
        foreach ($Bookings as $Booking) {
            $events[] = [
                'title' => $Booking->name,
                'start' => $Booking->booking_date . ' ' . $Booking->start_time,
                'end' => $Booking->booking_date . ' ' . $Booking->finish_time,
            ];
        }

        return view('booking' , compact('events'));
    }
}
