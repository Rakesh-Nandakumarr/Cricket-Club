<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function Contacts()
    {
        return view('contacts');
    }

    //create store function
    public function store(Request $request)
    {
        //validate the form
        $contact = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'message' => 'required',
        ]);

        //store the data
        Contact::create($contact);

        // Send the email
        Mail::to('rakeshnandakumarr@gmail.com')->send(new ContactMail($contact));

        //redirect to the contacts page
        return redirect()->route('contacts')->with('success', 'Contact form submitted successfully');
    }

    public function sendTestEmail()
    {

    }
}
