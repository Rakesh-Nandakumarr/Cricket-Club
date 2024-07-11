<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'message' => 'required',
        ]);

        //store the data
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
        $contact->save();

        //redirect to the contacts page
        return redirect()->route('contacts')->with('success', 'Contact form submitted successfully');
    }
}
