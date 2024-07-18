<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        // get all the static pages names which are active
        $pages = \App\Models\StaticPage::where('is_active', 1)->get();
        // get all the sports names
        $teams = \App\Models\CricketTeam::all();

        return view('layouts.app' , compact('pages', 'teams'));
    }
}

