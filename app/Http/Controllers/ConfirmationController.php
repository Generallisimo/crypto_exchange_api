<?php

namespace App\Http\Controllers;

use App\Models\TransactionConfirmBot;
use App\Models\WalletCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConfirmationController extends Controller
{
    public function confirmation (Request $request, $id) {

        $exchangeForm = $request->session()->get('exchangeForm', []);
        // dd($exchangeForm);
        return view('confirmation', ['exchangeID' => $id, 'exchangeForm' => $exchangeForm]);
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
}
