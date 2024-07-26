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


Route::get('/change', [ConversionRateController::class, 'change'])->name('change');
Route::get('/api/conversion-rate', [ConversionRateController::class, 'getConversionRate']);
// need add post 
Route::get('/changeSend', [ConversionRateController::class, 'sendForm'])->name('sendForm');
Route::get('/confirmation{id}', [ConversionRateController::class, 'confirmation'])->name('confirmation');





Route::get('/exchange', function () {
    return view('exchange');
})->name('exchange');


Route::get('/finish', function () {
    return view('finish');
})->name('finish');





Route::get('/test', function(){
    return view ('test');
})->name('test');




// Route::get('/confirmation{id}', function ($id) {
//     return view('confirmation', ['transactionId' => $id]);
// })->name('confirmation');

// Route::get('/debug', function () {
//     $transactionId = bin2hex(random_bytes(4));
//     return 'Generated ID: ' . $transactionId;
// });