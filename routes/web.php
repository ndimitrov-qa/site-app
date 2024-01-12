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

// Route::get('/loading', function () {
//     return view('/loading');
// });

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

Route::get('/ttq5pz2x', function () {
    return view('ttq5pz2x');
})->name('ttq5pz2x');

//--------------------- Guides ------------------------------//
Route::get('/guides', function () {
    return view('/guides');
})->name('guides');

Route::get('/guides/breakdown-cover', function () {
    return view('/pages/guides/breakdown-cover');
})->name('guides-breakdown-cover');

// Route::get('/panel-provider', function () {
//     return view('pages/panel-provider');
// })->name('panel-provider');

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
Route::get('/insurance/life-insurance', function () {
    return view('pages/insurance/motoring/life-insurance');
})->name('life-insurance');
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

