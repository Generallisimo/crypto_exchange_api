<?php

namespace App\Http\Controllers;

use App\Models\FeeCurrency;
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

    public function getConversionRate(Request $request)
    {
        // $fromCurrency = $request->query('from');
        // $toCurrency = $request->query('to');

        // $response = Http::get("https://api.binance.com/api/v3/ticker/price", [
        //     'symbol' => $fromCurrency . $toCurrency,
        // ]);

        // Log::info($response->json());
        // return $response->json();

        // $fromCurrency = $request->query('from');
        // $toCurrency = $request->query('to');
        // $response = Http::get("https://api.binance.com/api/v3/ticker/price", [
        //     'symbol' => $fromCurrency . $toCurrency,
        // ]);
        
        // Log::info($response->json());

        // if ($response->successful()) {
        //     $rate = $response->json('price');
    
        //     // Получение комиссии для целевой валюты (toCurrency)
        //     $feeCurrency = FeeCurrency::where('currency', $toCurrency)->first();
        //     if ($feeCurrency) {
        //         $fee = $feeCurrency->fee / 100;
        //         $rate = $rate * (1 - $fee);
        //     }

        //     Log::info($response->json($rate));
        //     Log::info(response()->json(['price' => $rate]));

        //     return response()->json(['price' => $rate]);
        // } else {
        //     return response()->json(['error' => 'Error fetching conversion rate'], 500);
        // }

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

        // dd($request->all());
        return redirect()->route('confirmation', ['id' => $transactionId]);
    }
}
