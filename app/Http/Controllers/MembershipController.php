<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Mail\MembershipApplicationMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MembershipApplicationConfirmation;


class MembershipController extends Controller
{
    public function Memberships()
    {
        return view('memberships',);
    }

    public function store(Request $request)
    {
        $member = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'phone_number' => 'required|string|max:20',
            'mailing_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_relationship' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20',
            'emergency_contact_email' => 'required|email|max:255',
            'volunteer_activities' => 'array',
        ]);

        $member['volunteer_activities'] = json_encode($member['volunteer_activities']);

        // Send confirmation email to the company
        Mail::to('test@webrubix.com')->send(new MembershipApplicationMail($member));

        // Send confirmation email to the applicant
        Mail::to($member['email'])->send(new MembershipApplicationConfirmation());

        // Store the membership application
        Membership::create($member);

        

        return redirect()->back()->with('success', 'Membership application submitted successfully!');
    }
}
