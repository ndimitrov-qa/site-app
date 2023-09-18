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
    return view('home');
});

Route::get('/content', function () {
    return view('components/content');
});

Route::get('/panel-provider', function () {
    return view('pages/panel-provider');
});

Route::get('/hgv-insurance', function () {
    return view('pages/hgv-insurance');
});

Route::post('/save-quote', [QuoteController::class, 'store'])->name('save.quote');
