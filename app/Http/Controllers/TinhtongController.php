<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhtongController extends Controller
{   
    public function index(){
        return view('tinhtong');
    }
    public function tinhtong(Request $request)
    {
        $num1 = $request -> input('num1');
        $num2 = $request -> input('num2');
        $result = $num1 + $num2;

        return view('tinhtong',['result' => $result,]);

    }
}