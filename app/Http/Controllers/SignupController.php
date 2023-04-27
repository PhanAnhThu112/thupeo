<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
    public function index(){
        return view('Form');
    }
    public function displayInfor(SignupRequest $request){
        $user=[
            'name'=>$name=$request->input("name"),
            'age'=>$age=$request->input("age"),
            'date'=>$date=$request->input("date"),
            'phone'=>$phone=$request->input("phone"),
            'web'=>$web=$request->input("web"),
            'address'=>$name=$request->input("address"),
        ];
        return view('Form')->with('user',$user);
    }
}
