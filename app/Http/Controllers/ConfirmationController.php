<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function confirmation (Request $request, $id) {

        $exchangeForm = $request->session()->get('exchangeForm', []);
        // dd($formData);
        return view('confirmation', ['exchangeID' => $id, 'exchangeForm' => $exchangeForm]);
    }

}
