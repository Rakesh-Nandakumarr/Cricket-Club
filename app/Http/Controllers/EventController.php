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

        // pass the next upcoming event from today
        $nextEvent = Event::where('start_date', '>', $now)
                            ->orderBy('start_date', 'asc')
                            ->first();
        return view('events' , compact('upcomingEvents', 'ongoingEvents', 'previousEvents', 'nextEvent'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('events_show', compact('event'));
    }
}
