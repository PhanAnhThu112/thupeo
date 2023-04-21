<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    public function Hello(){
        $description="Đây là dòng mô tả";
        $copyright="anh Thư";
        $title="Đây là tiêu đề";
        $arr=['title'=>$title,'description'=> $description,'copyright'=> $copyright];
        return view('test')->with('vien',$arr);
        // return view('test')->with(['ttle'=>$title,'description'=> $description,'copyright'=> $copyright]);

    }
    use AuthorizesRequests, ValidatesRequests;
}
