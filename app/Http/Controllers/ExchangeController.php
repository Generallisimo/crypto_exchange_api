<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function exchangeID (Request $request, $id){

        $exchangeForm = $request->session()->get('exchangeForm', []);

        return view('exchange', ['exchangeID' => $id, 'exchangeForm' => $exchangeForm]);
    }
}
