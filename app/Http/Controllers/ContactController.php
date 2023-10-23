<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSubmitted;
use App\Mail\ContactAdminNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('pages/useful-links/contact-us');
    }

public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'enquiry' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // Send an email to the user
        Mail::to($request->email)->send(new ContactSubmitted($request));

        // Send an email to your admin with all the details
        Mail::to('nikolay@nova-connect.com')->send(new ContactAdminNotification($request));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }

}
