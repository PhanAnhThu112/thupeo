<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamgiacController extends Controller
{
    public function Hinhtamgiac(){
        return view('tamgiac');

    }
    public function tinhtamgiac(Request $request){
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $result=$num1*$num2*0.5;

        return view('tamgiac',['result'=>$result]);
        
        
    }
}
