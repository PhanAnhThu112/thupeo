<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;

class PageController extends Controller
{
    public function getIndex(){	

        $slide =Slide::all();						
    	//return view('page.trangchu',['slide'=>$slide]);						
        $new_product = Product::where('new',1)->paginate(8);							
        //dd($new_product);							
    	return view('trangchu',compact('slide','new_product'));						
    }							

			
	

}
