<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function Events()
    {
        $now = Carbon::now();

        $upcomingEvents = Event::where('start_date', '>', $now)->get();
        $ongoingEvents = Event::where('start_date', '<=', $now)
                                ->where('end_date', '>=', $now)
                                ->get();
        $previousEvents = Event::where('end_date', '<', $now)->get();
        return view('events' , compact('upcomingEvents', 'ongoingEvents', 'previousEvents'));
    }
}
