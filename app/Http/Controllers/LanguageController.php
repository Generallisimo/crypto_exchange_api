<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang, Request $request)
    {
        if($lang){
            Session::put('locale', $lang);
        }else{
            $lang = 'en';
        }
        App::setLocale($lang);
        return redirect()->back();
    }
}
