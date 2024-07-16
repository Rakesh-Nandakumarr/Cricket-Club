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
        // get all the static pages names
        $pages = \App\Models\StaticPage::all('title', 'slug');

        // get all the sports names
        $sports = \App\Models\Sport::all();


        return view('layouts.app' , compact('pages', 'sports'));
    }
}
