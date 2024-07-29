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
Route::get('/api/conversion-rate', [ChangeController::class, 'getConversionExchange']);
Route::post('/change/send', [ChangeController::class, 'sendForm'])->name('sendForm');

// Confirmation
Route::get('/confirmation{id}', [ConfirmationController::class, 'confirmation'])->name('confirmation');

// Exchange
Route::post('/exc{id}', [ExchangeController::class, 'exchangeID'])->name('exchangeGet');
Route::get('/exchange{id}', [ExchangeController::class, 'exchange'])->name('exchange');
Route::post('/telegram/confirm', [ExchangeController::class, 'confirm'])->name('telegram');
Route::get('/confirm-status/{id}', [ExchangeController::class, 'confirmStatus'])->name('confirmStatus');
Route::post('/telegram/status', [ExchangeController::class, 'sendStatusDeposit'])->name('depositStatus');
Route::get('/transaction-status/{id}', [ExchangeController::class, 'getStatusDeposit'])->name('getDepositStatus');





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