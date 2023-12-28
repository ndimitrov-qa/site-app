<?php

namespace App\Http\Controllers;

use App\Models\QuoteFleet;
use Illuminate\Http\Request;
use App\Mail\ContactSubmitted;
use App\Mail\QuoteAdminNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class QuoteFleetController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number_of_vehicles_fleet' => 'required',
            'mobile_number_fleet' => 'required|regex:/^07[0-9]{9}$/|digits:11',
        ], [
            'mobile_number_fleet.regex' => 'The mobile number must start with 07',
            'mobile_number_fleet.digits' => 'The mobile number must be exactly 11 digits',
        ]);

        // Create a new QuoteRequest instance and save it to the database
        $quoteRequest = new QuoteFleet();
        $quoteRequest->number_of_vehicles_fleet = $validatedData['number_of_vehicles_fleet'];
        $quoteRequest->mobile_number_fleet = $validatedData['mobile_number_fleet'];
        $quoteRequest->save();

        // Send an email to admin with all the details
        Mail::to('nikolay@nova-connect.com')->send(
            new QuoteAdminNotification(
                $quoteRequest->number_of_vehicles_fleet,
                $quoteRequest->mobile_number_fleet
            )
        );

        // Return a response here
        // return redirect()->back()->with('success', 'Quote request submitted successfully');
        // }

        Session::flash('openFleetInsurancePage', 'https://quote.beatthatquotes.com/insurance/fleet');

        // Return a response here
        return back();

    }
}
