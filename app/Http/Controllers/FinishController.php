<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinishController extends Controller
{
    public function finish($id){
        return view('finish', ['id'=>$id]);
    }
}
