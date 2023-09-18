<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QuoteRequest;

class QuoteController extends Controller
{
    public function store(Request $request)
    {

    // Validate the form data
    $validatedData = $request->validate([
    'number_of_vehicles' => 'required',
    'mobile_number' => 'required',
    ]);

    // Create a new QuoteRequest instance and save it to the database
    $quoteRequest = new QuoteRequest();
    $quoteRequest->number_of_vehicles = $validatedData['number_of_vehicles'];
    $quoteRequest->mobile_number = $validatedData['mobile_number'];
    $quoteRequest->save();


    // Return a response here
    return redirect()->back()->with('success', 'Quote request submitted successfully');
    }
}
