<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
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
});

Route::get('/content', function () {
    return view('pages/content');
});

Route::get('/panel-provider', function () {
    return view('pages/panel-provider');
});

Route::get('/privacy-policy', function () {
    return view('pages/privacy-policy');
});

Route::get('/ttq5pz2x', function () {
    return view('ttq5pz2x');
});

Route::get('/quote/fleet', function () {
    return view('pages/fleet');
});

                // MENU/INSURANCE //
//----------- Insurance/What's Popular ------------------------//
//------------------------------------------------------------//

//----------- Insurance/Motoring ------------------------------//
Route::get('/breakdown-cover', function () {
    return view('pages/insurance/motoring/breakdown-cover');
});
Route::get('/european-breakdown-cover', function () {
    return view('pages/insurance/motoring/european-breakdown-cover');
});
Route::get('/car-hire-excess-insurance', function () {
    return view('pages/insurance/motoring/car-hire-excess-insurance');
});
//------------------------------------------------------------//

//----------- Insurance/Property -----------------------------//
Route::get('/home-appliance-cover', function () {
    return view('pages/insurance/property/home-appliance-cover');
});
Route::get('/home-emergency-cover', function () {
    return view('pages/insurance/property/home-emergency-cover');
});
//------------------------------------------------------------//

//----------- Insurance/Leisure -----------------------------//
Route::get('/bicycle-insurance', function () {
    return view('pages/insurance/leisure/bicycle-insurance');
});
Route::get('/static-caravan-insurance', function () {
    return view('pages/insurance/leisure/static-caravan-insurance');
});
Route::get('/touring-caravan-insurance', function () {
    return view('pages/insurance/leisure/touring-caravan-insurance');
});
Route::get('/musical-instrument-insurance', function () {
    return view('pages/insurance/leisure/musical-instrument-insurance');
});
Route::get('/golf-insurance', function () {
    return view('pages/insurance/leisure/golf-insurance');
});
Route::get('/boat-insurance', function () {
    return view('pages/insurance/leisure/boat-insurance');
});
Route::get('/gun-insurance', function () {
    return view('pages/insurance/leisure/gun-insurance');
});
Route::get('/travel-insurance', function () {
    return view('pages/insurance/leisure/travel-insurance');
});

//----------- Insurance/Lifestyle -----------------------------//
Route::get('/drone-insurance', function () {
    return view('pages/insurance/lifestyle/drone-insurance');
});
Route::get('/camera-insurance', function () {
    return view('pages/insurance/lifestyle/camera-insurance');
});
Route::get('/gadget-insurance', function () {
    return view('pages/insurance/lifestyle/gadget-insurance');
});
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
Route::get('/car-finance', function () {
    return view('pages/money/motoring/car-finance');
});
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
});
Route::get('/quote/hgv/step-1', function () {
    return view('pages/hgv/step-1');
});
Route::get('/quote/hgv/step-2', function () {
    return view('pages/hgv/step-2');
});
Route::get('/quote/hgv/step-3', function () {
    return view('pages/hgv/step-3');
});
Route::get('/quote/hgv/step-4', function () {
    return view('pages/hgv/step-4');
});
Route::get('/quote/hgv/step-5', function () {
    return view('pages/hgv/step-5');
});
Route::get('/quote/hgv/step-6', function () {
    return view('pages/hgv/step-6');
});
Route::get('/quote/hgv/step-7', function () {
    return view('pages/hgv/step-7');
});
Route::get('/quote/hgv/step-8', function () {
    return view('pages/hgv/step-8');
});
Route::get('/quote/hgv/step-9', function () {
    return view('pages/hgv/step-9');
});
Route::get('/quote/hgv/thank-you', function () {
    return view('pages/hgv/thank-you');
});

// FLEET QUOTE //
Route::get('/quote/fleet', function () {
    return view('pages/fleet/index');
});
Route::get('/quote/fleet/step-1', function () {
    return view('pages/fleet/step-1');
});
Route::get('/quote/fleet/step-2', function () {
    return view('pages/fleet/step-2');
});
Route::get('/quote/fleet/step-3', function () {
    return view('pages/fleet/step-3');
});
Route::get('/quote/fleet/step-4', function () {
    return view('pages/fleet/step-4');
});
Route::get('/quote/fleet/step-5', function () {
    return view('pages/fleet/step-5');
});
Route::get('/quote/fleet/step-6', function () {
    return view('pages/fleet/step-6');
});
Route::get('/quote/fleet/step-7', function () {
    return view('pages/fleet/step-7');
});
Route::get('/quote/fleet/step-8', function () {
    return view('pages/fleet/step-8');
});
Route::get('/quote/fleet/step-9', function () {
    return view('pages/fleet/step-9');
});
Route::get('/quote/fleet/thank-you', function () {
    return view('pages/fleet/thank-you');
});



Route::post('/save-quote', [QuoteController::class, 'store'])->name('save.quote');
