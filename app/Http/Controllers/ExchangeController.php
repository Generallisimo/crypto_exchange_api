<?php

namespace App\Http\Controllers;

use App\Models\TransactionConfirmBot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExchangeController extends Controller
{

    public function exchange(Request $request, $id){
        $exchangeForm = $request->session()->get('exchangeForm', []);
        // $transaction = TransactionConfirmBot::where('transaction_id', $id)->first();
        // dd($transaction->status);
        return view('exchange', ['id' => $id, 'exchangeForm' => $exchangeForm]);
    }

    public function exchangeID(Request $request, $id)
    {
        $exchangeForm = $request->session()->get('exchangeForm', []);
        $transaction = TransactionConfirmBot::where('transaction_id', $id)->first();
    
        if ($transaction && $transaction->confirmed) {
            return redirect()->route('exchange', ['id' => $id, 'exchangeForm' => $exchangeForm]);
        } else {
            return redirect()->back();
        }

        return redirect()->route('exchange', ['id' => $id, 'exchangeForm' => $exchangeForm]);
    }
    public function confirm(Request $request)
    {
        $transactionId = $request->input('transaction_id');
        $action = $request->input('action');
        $transaction = TransactionConfirmBot::firstOrNew(['transaction_id' => $transactionId]);
    
        if ($action === 'confirm') {
            $transaction->confirmed = true;
            Log::info("Транзакция $transactionId подтверждена");
        } elseif ($action === 'reject') {
            $transaction->confirmed = false;
            Log::info("Транзакция $transactionId отклонена");
        }
    
        $transaction->save();
        return response()->json(['status' => $transaction->confirmed ? 'confirmed' : 'rejected']);

    }

    public function confirmStatus($id)
    {
        $transaction = TransactionConfirmBot::where('transaction_id', $id)->first();

        return response()->json([
            'confirmed' => $transaction ? $transaction->confirmed : false
        ]);
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

// return view('exchange', ['exchangeID' => $id, 'exchangeForm' => $exchangeForm]);