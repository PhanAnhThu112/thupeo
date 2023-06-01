<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;
use App\Models\comment;
use App\Models\TypeProduct;

class PageController extends Controller
{
    public function getIndex(){	

        $slide =Slide::all();						
    	//return view('page.trangchu',['slide'=>$slide]);						
        $new_product = product::where('new',1)->paginate(8);
        $sanpham_khuyenmai = product::where('promotion_price','<>',0)->paginate(8);																	
        //dd($new_product);							
    	return view('trangchu',compact('slide','new_product','sanpham_khuyenmai'));						
    }	
    public function getLoaiSp($type){			
        $type_product =TypeProduct::all();//Show ra tên loại sản phẩm
        $sp_theoloai = product::where('id_type',$type)->get();
        $sp_khac =product::where('id_type','<>',$type)->paginate(3);
        return view('loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));


}	  
    public function getChitiet( Request $request){
        $sanpham= product:: where ('id', $request-> id)->first();
        $splienquan=product::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments=comment::where ('id_product', $request->id)->get();
        return view('chitiet_sanpham', compact('sanpham','splienquan', 'comments'));
    }
    public function getLienhe(){
        return view('lienhe');
    }
    public function getAboutus(){
        return view('about_sanpham');
    }
}
    	
