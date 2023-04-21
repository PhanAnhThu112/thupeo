<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugiacController extends Controller
{
    public function Hinhtugiac(){
        return view('tugiac');

    }
    public function tinhtugiac(Request $request){
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $num3=$request->input('num3');
        $num4=$request->input('num4');
        $result=$num1+$num2+$num3+$num4;

        return view('tugiac',['result'=>$result]);
        
        
    }
}
