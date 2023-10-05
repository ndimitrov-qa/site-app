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

Route::get('/gadget-insurance', function () {
    return view('pages/gadget-insurance');
});

Route::get('/home-emergency', function () {
    return view('pages/home-emergency');
});

Route::get('/breakdown-cover', function () {
    return view('pages/breakdown-cover');
});

Route::get('/european-breakdown-cover', function () {
    return view('pages/european-breakdown-cover');
});

Route::get('/car-finance', function () {
    return view('pages/money/car-finance');
});

Route::get('/car-hire-excess-insurance', function () {
    return view('pages/insurance/motoring/car-hire-excess-insurance');
});

Route::get('/privacy-policy', function () {
    return view('pages/privacy-policy');
});

Route::get('/hgv-insurance', function () {
    return view('pages/hgv-insurance');
});

Route::get('/ttq5pz2x', function () {
    return view('ttq5pz2x');
});

Route::get('/quote/fleet', function () {
    return view('pages/fleet');
});

// HGV //
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

// FLEET //
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
