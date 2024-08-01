<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\TransactionConfirmBot;
use Illuminate\Support\Facades\Log;

class CheckTransactionStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $transactionId;

    public function __construct($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    public function handle()
    {
        $transaction = TransactionConfirmBot::where('transaction_id', $this->transactionId)->first();

        if ($transaction && is_null($transaction->status)) {
            $transaction->status = 'cancelled';
            $transaction->save();

            Log::info("Транзакция {$this->transactionId} была отменена из-за истечения времени ожидания.");
        }
    }
}
