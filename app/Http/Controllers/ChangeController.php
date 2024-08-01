<?php

namespace App\Http\Controllers;

use App\Models\FeeCurrency;
use App\Models\TransactionConfirmBot;
use Binance\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChangeController extends Controller
{
    public function change()
    {
        return view('change');
    }

    public function getConversionExchange(Request $request)
    {
        $fromCurrency = $request->query('from');
        $toCurrency = $request->query('to');
        $response = Http::get("https://api.binance.com/api/v3/ticker/price", [
            'symbol' => $fromCurrency . $toCurrency,
        ]);


        
        if ($response->successful()) {
            $rate = $response->json('price');

            // Получение комиссии для целевой валюты (toCurrency)
            $feeCurrency = FeeCurrency::where('currency', $toCurrency)->first();
            if ($feeCurrency) {
                $fee = $feeCurrency->fee / 100; // Преобразование процента в долю
                $rate = $rate * (1 - $fee);
            }

            return response()->json(['price' => $rate]);
        } else {
            // Проверка на обратную пару
            $response = Http::get("https://api.binance.com/api/v3/ticker/price", [
                'symbol' => $toCurrency . $fromCurrency,
            ]);

            if ($response->successful()) {
                $rate = 1 / $response->json('price');

                // Получение комиссии для целевой валюты (toCurrency)
                $feeCurrency = FeeCurrency::where('currency', $toCurrency)->first();
                if ($feeCurrency) {
                    $fee = $feeCurrency->fee / 100; // Преобразование процента в долю
                    $rate = $rate * (1 - $fee);
                }

                return response()->json(['price' => $rate]);
            } else {
                return response()->json(['error' => 'Error fetching conversion rate'], 500);
            }
        }
    }

    public function sendForm(Request $request)
    {

        $sendCoinsOption = $request->input('send-coins-option') ?? $request->input('select1');
        $getCoinsOption = $request->input('get-coins-option') ?? $request->input('select2');
        
        $request->session()->put('exchangeForm', [
            'send-coins-value' => $request->input('send-coins-value'),
            'send-coins-option' => $sendCoinsOption,
            'get-coins-value' => $request->input('get-coins-value'),
            'get-coins-option' => $getCoinsOption,
            'payout-exchange' => $request->input('payout-exchange'),
            'refund-exchange' => $request->input('refund-exchange'),
        ]);


        $transactionId = bin2hex(random_bytes(4));

        $exchangeForm = $request->session()->get('exchangeForm', []);

        $this->sendTelegram($transactionId, $exchangeForm);
        TransactionConfirmBot::create(['transaction_id' => $transactionId, 'currency'=>$getCoinsOption]);


        return redirect()->route('confirmation', ['id' => $transactionId]);
    }
    

    private function sendTelegram($transactionId, $data)
    {
        $telegramUrl = 'https://api.telegram.org/bot7312638510:AAFDeQhPyh5g8lVg1QSQq7eFConOXLFKuAI/sendMessage';
        $chatId = '6904012814';
        $fromCurrency = json_encode($data['send-coins-option'] ?? $data['select1']);
        $toCurrency = json_encode($data['get-coins-option'] ?? $data['select2']);
        $sendCoin = json_encode($data['send-coins-value']);
        $getCoin = json_encode($data['get-coins-value']);
        $path = json_encode($data['payout-exchange']);
        // dd($dataJSON);
        $message = "Новый запрос на подтверждение:\nTransaction ID: $transactionId\nСумма отправки: $sendCoin $fromCurrency\nСумма получения: $getCoin $toCurrency\nАдрес получения: $path \n \nDebug:\n" . json_encode($data);

        $client = new \GuzzleHttp\Client();
        $client->post($telegramUrl, [
            'json' => [
                'chat_id' => $chatId,
                'text' => $message,
                'reply_markup' => json_encode([
                    'inline_keyboard' => [[
                        ['text' => 'Да', 'callback_data' => 'confirm_' . $transactionId],
                        ['text' => 'Нет', 'callback_data' => 'reject_' . $transactionId]
                    ]]
                ])
            ]
        ]);

        // Логирование отправленного сообщения
        Log::info("Отправлено сообщение в Telegram для транзакции $transactionId");
    }
}
