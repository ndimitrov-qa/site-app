<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteFleetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteHgvController;
use App\Http\Controllers\QuoteTruckController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/live', function () {
    return view('/home');
})->name('live');

Route::get('/fleet-insurance', function () {
    return view('/fleet-insurance');
})->name('fleet-insurance');

Route::get('/hgv-insurance', function () {
    return view('/hgv-insurance');
})->name('hgv-insurance');

Route::get('/truck-insurance', function () {
    return view('/truck-insurance');
})->name('truck-insurance');

Route::get('/panel-provider', function () {
    return view('pages/panel-provider');
})->name('panel-provider');

Route::get('/ttq5pz2x', function () {
    return view('ttq5pz2x');
})->name('ttq5pz2x');

Route::get('/quote/fleet', function () {
    return view('pages/fleet');
})->name('fleet');

Route::get('/quotation', function () {
    return view('/quotation');
})->name('quotation');

                // MENU/INSURANCE //
//----------- Insurance/What's Popular ------------------------//
//------------------------------------------------------------//

//----------- Insurance/Motoring ------------------------------//
Route::get('/insurance/breakdown-cover', function () {
    return view('pages/insurance/motoring/breakdown-cover');
})->name('breakdown-cover');
Route::get('/insurance/european-breakdown-cover', function () {
    return view('pages/insurance/motoring/european-breakdown-cover');
})->name('european-breakdown-cover');
Route::get('/insurance/car-hire-excess-insurance', function () {
    return view('pages/insurance/motoring/car-hire-excess-insurance');
})->name('car-hire-excess-insurance');
Route::get('/insurance/gap-insurance', function () {
    return view('pages/insurance/motoring/gap-insurance');
})->name('gap-insurance');
Route::get('/insurance/van-insurance', function () {
    return view('pages/insurance/motoring/van-insurance');
})->name('van-insurance');
Route::get('/insurance/motorbike-insurance', function () {
    return view('pages/insurance/motoring/motorbike-insurance');
})->name('motorbike-insurance');
Route::get('/insurance/learner-insurance', function () {
    return view('pages/insurance/motoring/learner-insurance');
})->name('learner-insurance');
//------------------------------------------------------------//

//----------- Insurance/Property -----------------------------//
Route::get('/insurance/home-appliance-cover', function () {
    return view('pages/insurance/property/home-appliance-cover');
})->name('home-appliance-cover');
Route::get('/insurance/home-emergency-cover', function () {
    return view('pages/insurance/property/home-emergency-cover');
})->name('home-emergency-cover');
//------------------------------------------------------------//

//----------- Insurance/Leisure -----------------------------//
Route::get('/insurance/bicycle-insurance', function () {
    return view('pages/insurance/leisure/bicycle-insurance');
})->name('bicycle-insurance');
Route::get('/insurance/static-caravan-insurance', function () {
    return view('pages/insurance/leisure/static-caravan-insurance');
})->name('static-caravan-insurance');
Route::get('/insurance/touring-caravan-insurance', function () {
    return view('pages/insurance/leisure/touring-caravan-insurance');
})->name('touring-caravan-insurance');
Route::get('/insurance/musical-instrument-insurance', function () {
    return view('pages/insurance/leisure/musical-instrument-insurance');
})->name('musical-instrument-insurance');
Route::get('/insurance/golf-insurance', function () {
    return view('pages/insurance/leisure/golf-insurance');
})->name('golf-insurance');
Route::get('/insurance/boat-insurance', function () {
    return view('pages/insurance/leisure/boat-insurance');
})->name('boat-insurance');
Route::get('/insurance/gun-insurance', function () {
    return view('pages/insurance/leisure/gun-insurance');
})->name('gun-insurance');
Route::get('/insurance/travel-insurance', function () {
    return view('pages/insurance/leisure/travel-insurance');
})->name('travel-insurance');

//----------- Insurance/Lifestyle -----------------------------//
Route::get('/insurance/drone-insurance', function () {
    return view('pages/insurance/lifestyle/drone-insurance');
})->name('drone-insurance');
Route::get('/insurance/camera-insurance', function () {
    return view('pages/insurance/lifestyle/camera-insurance');
})->name('camera-insurance');
Route::get('/insurance/gadget-insurance', function () {
    return view('pages/insurance/lifestyle/gadget-insurance');
})->name('gadget-insurance');
//------------------------------------------------------------//

                // MENU/BUSINESS //
//----------- Insurance/What's Popular ------------------------//
//------------------------------------------------------------//

//-------------- Business/Motoring ----------------------------//
//------------------------------------------------------------//

//------------- Business/Property ----------------------------//
//-----------------------------------------------------------//

//-------------- Business/Leisure ----------------------------//
//-----------------------------------------------------------//

//------------- Business/Business ----------------------------//
//-----------------------------------------------------------//

//------------ Business/Lifestyle ----------------------------//
//-----------------------------------------------------------//


                // MENU/MONEY //
//----------- Insurance/What's Popular ------------------------//
//------------------------------------------------------------//

//-------------- Business/Motoring ----------------------------//
Route::get('/money/car-finance', function () {
    return view('pages/money/motoring/car-finance');
})->name('car-finance');
//------------------------------------------------------------//

//------------- Business/Property ----------------------------//
//-----------------------------------------------------------//

//-------------- Business/Leisure ----------------------------//
//-----------------------------------------------------------//

//------------- Business/Business ----------------------------//
//-----------------------------------------------------------//

//------------ Business/Lifestyle ----------------------------//
//-----------------------------------------------------------//

                // MENU/SERVICES //
//----------- Insurance/What's Popular ------------------------//
//------------------------------------------------------------//

//-------------- Business/Motoring ----------------------------//
//------------------------------------------------------------//

//------------- Business/Property ----------------------------//
//-----------------------------------------------------------//

//-------------- Business/Leisure ----------------------------//
//-----------------------------------------------------------//

//------------- Business/Business ----------------------------//
//-----------------------------------------------------------//

//------------ Business/Lifestyle ----------------------------//
//-----------------------------------------------------------//


// HGV QUOTE//
Route::get('/quote/hgv', function () {
    return view('pages/hgv/index');
})->name('index');
Route::get('/quote/hgv/step-1', function () {
    return view('pages/hgv/step-1');
})->name('step-1');
Route::get('/quote/hgv/step-2', function () {
    return view('pages/hgv/step-2');
})->name('step-2');
Route::get('/quote/hgv/step-3', function () {
    return view('pages/hgv/step-3');
})->name('step-3');
Route::get('/quote/hgv/step-4', function () {
    return view('pages/hgv/step-4');
})->name('step-4');
Route::get('/quote/hgv/step-5', function () {
    return view('pages/hgv/step-5');
})->name('step-5');
Route::get('/quote/hgv/step-6', function () {
    return view('pages/hgv/step-6');
})->name('step-6');
Route::get('/quote/hgv/step-7', function () {
    return view('pages/hgv/step-7');
})->name('step-7');
Route::get('/quote/hgv/step-8', function () {
    return view('pages/hgv/step-8');
})->name('step-8');
Route::get('/quote/hgv/step-9', function () {
    return view('pages/hgv/step-9');
})->name('step-9');
Route::get('/quote/hgv/thank-you', function () {
    return view('pages/hgv/thank-you');
})->name('thank-you');

// FLEET QUOTE //
Route::get('/quote/fleet', function () {
    return view('pages/fleet/index');
})->name('index');
Route::get('/quote/fleet/step-1', function () {
    return view('pages/fleet/step-1');
})->name('step-1');
Route::get('/quote/fleet/step-2', function () {
    return view('pages/fleet/step-2');
})->name('step-2');
Route::get('/quote/fleet/step-3', function () {
    return view('pages/fleet/step-3');
})->name('step-3');
Route::get('/quote/fleet/step-4', function () {
    return view('pages/fleet/step-4');
})->name('step-4');
Route::get('/quote/fleet/step-5', function () {
    return view('pages/fleet/step-5');
})->name('step-5');
Route::get('/quote/fleet/step-6', function () {
    return view('pages/fleet/step-6');
})->name('step-6');
Route::get('/quote/fleet/step-7', function () {
    return view('pages/fleet/step-7');
})->name('step-7');
Route::get('/quote/fleet/step-8', function () {
    return view('pages/fleet/step-8');
})->name('step-8');
Route::get('/quote/fleet/step-9', function () {
    return view('pages/fleet/step-9');
})->name('step-9');
Route::get('/quote/fleet/thank-you', function () {
    return view('pages/fleet/thank-you');
})->name('thank-you');

                          // FLEET FORM QUOTE //
Route::post('/save-quote', [QuoteFleetController::class, 'store'])->name('save.quote');
                          // HGV FORM QUOTE //
Route::post('/save-hgv-quote', [QuoteHgvController::class, 'store'])->name('save.hgv.quote');
                          // TRUCK FORM QUOTE //
Route::post('/save-truck-quote', [QuoteTruckController::class, 'store'])->name('save.truck.quote');

                          // USEFUL LINKS //
// --------------------------------------------------------------------------------------- //
                    // CONTACT-US PAGE AND FORM SUBMIT //
Route::get('/contact-us', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/affiliate-program', function () {
    return view('pages/useful-links/affiliate-program');
})->name('affiliate-program');

Route::get('/about-us', function () {
    return view('pages/useful-links/about-us');
})->name('about-us');
// -------------------------------------------------------------------------------------- //

                            // TERMS & LEGALS //
// --------------------------------------------------------------------------------------- //
Route::get('/terms-conditions', function () {
    return view('pages/terms-legals/terms-conditions');
})->name('terms-conditions');

Route::get('/privacy-policy', function () {
    return view('pages/terms-legals/privacy-policy');
})->name('privacy-policy');

Route::get('/marketing-preferences', function () {
    return view('pages/terms-legals/marketing-preferences');
})->name('marketing-preferences');
// --------------------------------------------------------------------------------------- //

