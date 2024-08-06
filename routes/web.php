<?php

use App\Http\Controllers\ChangeController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\CheckId;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', function () {
    return view('started');
})->name('started');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::middleware([CheckId::class])->group(function(){
    Route::get('/confirmation{id}', [ConfirmationController::class, 'confirmation'])->name('confirmation');
    Route::get('/exchange{id}', [ExchangeController::class, 'exchange'])->name('exchange');
    Route::get('/finish{id}', [FinishController::class, 'finish'])->name('finish');
});

// Change list
Route::get('/change', [ChangeController::class, 'change'])->name('change');
Route::get('/api/conversion-rate', [ChangeController::class, 'getConversionExchange']);
Route::post('/change/send', [ChangeController::class, 'sendForm'])->name('sendForm');
Route::post('/change/send-buy', [ChangeController::class, 'sendFormBuy'])->name('sendFormBuy');

// Confirmation
Route::post('/telegram/confirm', [ConfirmationController::class, 'confirm'])->name('telegram');
Route::get('/confirm-status/{id}', [ConfirmationController::class, 'confirmStatus'])->name('confirmStatus');
Route::post('/exc{id}', [ConfirmationController::class, 'exchangeID'])->name('exchangeGet');

// Exchange
Route::post('/telegram/status', [ExchangeController::class, 'sendStatusDeposit'])->name('depositStatus');
Route::get('/transaction-status/{id}', [ExchangeController::class, 'getStatusDeposit'])->name('getDepositStatus');


// Languge
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');


// Route::get('/test', function(){
//     return view ('test');
// })->name('test');
