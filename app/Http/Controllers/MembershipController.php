<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function Memberships()
    {
        return view('memberships');
    }
}
