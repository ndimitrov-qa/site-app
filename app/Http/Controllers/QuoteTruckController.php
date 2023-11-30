<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuoteTruck;

class QuoteTruckController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_of_vehicle_truck' => 'required',
            'mobile_number_truck' => 'required|regex:/^07[0-9]{9}$/|digits:11',
        ], [
            'mobile_number_truck.regex' => 'The mobile number must start with 07',
            'mobile_number_truck.digits' => 'The mobile number must be exactly 11 digits',
        ]);

        // Create a new QuoteRequest instance and save it to the database
        $quoteRequest = new QuoteTruck();
        $quoteRequest->type_of_vehicle_truck = $validatedData['type_of_vehicle_truck'];
        $quoteRequest->mobile_number_truck = $validatedData['mobile_number_truck'];
        $quoteRequest->save();

        // Return a response here
        return redirect()->back()->with('success', 'Quote request submitted successfully');
        }
}
