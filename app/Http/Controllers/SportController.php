<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function SportsTeam($slug)
    {
        //get the sport
        $team = Team::where('slug', $slug)->firstOrFail();
        return view('sport-teams', compact('team'));
    }   

        public function SportsPlayerList($slug)
    {
        //get the team
        $team = Team::where('slug', $slug)->firstOrFail();

        //get the players
        $players = Player::where('team_id', $team->id)->get();
        
        return view('sport-teams', compact('team', 'players'));
    }
}
