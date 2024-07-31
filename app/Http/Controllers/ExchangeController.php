<?php

namespace App\Http\Controllers;

use App\Models\TransactionConfirmBot;
use App\Models\WalletCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExchangeController extends Controller
{

    public function exchange(Request $request, $id){
        $exchangeForm = $request->session()->get('exchangeForm', []);
        $transaction = TransactionConfirmBot::where('transaction_id', $id)->first();
        $currency = $transaction->currency;
        $wallet = WalletCoin::where('currency_name', $currency)->first()->wallet;
        $exchangeForm['wallet'] = $wallet;
        // dd($exchangeForm);
        return view('exchange', ['id' => $id, 'exchangeForm' => $exchangeForm]);
    }


    public function sendStatusDeposit (Request $request){
        $transactionId = $request->input('transaction_id');
        $status = $request->input('status');
        $transaction = TransactionConfirmBot::where('transaction_id', $transactionId)->first();
        if($status === 'done'){
            $transaction->status = 'done';
            Log::info("Транзакция $transactionId статус: $status");
        }elseif($status === 'failed'){
            $transaction->status = 'failed';
            Log::info("Транзакция $transactionId статус: $status");
        }elseif($status === 'cancelled'){
            $transaction->status = 'cancelled';
            Log::info("Транзакция $transactionId статус: $status");
        }

        $transaction->save();
        return response()->json(['status' => $transaction->status]);
    }

    public function getStatusDeposit ($id){
        $transaction = TransactionConfirmBot::where('transaction_id', $id)->first();

        return response()->json([
            'status' => $transaction->status 
        ]);
    }
}