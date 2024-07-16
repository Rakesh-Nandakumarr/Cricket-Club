<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function SportsTeam($slug)
    {
        //get the sport
        $sport = Sport::where('slug', $slug)->firstOrFail();

        //get the players of the sport
        $players = $sport->players;
        return view('sport-teams', compact('sport', 'players'));
    }   

        public function Sports()
    {
        
        return view('sports');
    }
}
