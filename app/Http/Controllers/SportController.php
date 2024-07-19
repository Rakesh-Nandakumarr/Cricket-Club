<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\CricketTeam;
use App\Models\Player;
use Illuminate\Http\Request;

class SportController extends Controller
{   
    public function SportsPlayerList($slug)
    {
        //get the team
        $team = CricketTeam::where('slug', $slug)->firstOrFail();

        //get the players
        $players = Player::where('Cricket_team_id', $team->id)->get();
        
        return view('sport-teams', compact('team', 'players'));
    }
}
