<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuoteHgv;

class QuoteHgvController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_of_vehicle_hgv' => 'required',
            'mobile_number_hgv' => 'required|regex:/^07[0-9]{9}$/|digits:11',
        ], [
            'mobile_number_truck.regex' => 'The mobile number must start with 07',
            'mobile_number_truck.digits' => 'The mobile number must be exactly 11 digits',
        ]);

        // Create a new QuoteRequest instance and save it to the database
        $quoteRequest = new QuoteHgv();
        $quoteRequest->type_of_vehicle_hgv = $validatedData['type_of_vehicle_hgv'];
        $quoteRequest->mobile_number_hgv = $validatedData['mobile_number_hgv'];
        $quoteRequest->save();

        // Return a response here
        // return redirect()->back()->with('success', 'Quote request submitted successfully');
        // }

         // Return a response here
         return redirect('https://quote.beatthatquotes.com/insurance/hgv');
    }
}
