<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function exchangeID ($id){

        return view('exchange', ['exchangeID' => $id]);
    }
}
