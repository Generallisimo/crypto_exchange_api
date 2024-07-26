<?php

use App\Http\Controllers\ChangeController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ExchangeController;
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

// Change list
Route::get('/change', [ChangeController::class, 'change'])->name('change');
Route::get('/api/conversion-rate', [ChangeController::class, 'getConversionRate']);
// need add post 
Route::get('/changeSend', [ChangeController::class, 'sendForm'])->name('sendForm');

// Confirmation
Route::get('/confirmation{id}', [ConfirmationController::class, 'confirmation'])->name('confirmation');

// Exchange
Route::get('/exchange{id}', [ExchangeController::class, 'exchangeID'])->name('exchange');



// Route::get('/exchange', function () {
//     return view('exchange');
// })->name('exchange');


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