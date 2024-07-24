<?php

namespace App\Http\Controllers;

use Binance\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ConversionRateController extends Controller
{
    public function getConversionRate(Request $request)
    {
        $fromCurrency = $request->query('from');
        $toCurrency = $request->query('to');

        $apiKey = env('BINANCE_API_KEY');
        // $apiSecret = env('BINANCE_API_SECRET');

        $response = Http::withHeaders([
            'X-MBX-APIKEY' => $apiKey,
        ])->get("https://api.binance.com/api/v3/ticker/price", [
            'symbol' => $fromCurrency . $toCurrency,
        ]);

        // Проверка успешности запроса и получение данных
        if ($response->successful()) {
            $data = $response->json();
            $price = $data['price'];
            Log::info('Price: ' . $price);
        } else {
            $price = 'Error fetching price';
            Log::error('Error fetching price: ' . $response->body());
        }

        return $response->json();
    }

    public function getPrice(Request $request)
    {
        return view('change');
    }
}
