<?php

use App\Http\Controllers\ConversionRateController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/started', function () {
    return view('started');
})->name('started');


Route::get('/about', function () {
    return view('about');
})->name('about');


// Route::get('/change', function () {
//     return view('change');
// })->name('change');
Route::get('/change', [ConversionRateController::class, 'getPrice'])->name('change');

Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');


Route::get('/exchange', function () {
    return view('exchange');
})->name('exchange');


Route::get('/finish', function () {
    return view('finish');
})->name('finish');


//
Route::get('/api/conversion-rate', [ConversionRateController::class, 'getConversionRate']);





Route::get('/test', function(){
    return view ('test');
})->name('test');