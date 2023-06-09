<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;
use App\Models\comment;
use App\Models\TypeProduct;
use App\Models\BillDetail;

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
    public function getIndexAdmin(){
        $product = product::all();
        return view('pageadmin.admin')->with(['product'=>$product,'sumSold'=>count(BillDetail::all())]);
     }
     public function getAdminAdd(){
        return view('pageadmin.formAdd');
     }
    
    public function postAdminAdd(Request $request)
    {
        $product = new product();
    
        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }
    
        $product->name = $request->inputName;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function getAdminEdit($id)
{
 $product = product::find($id);
 return view('pageadmin.formEdit')->with('product', $product);
}
    
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = product::find($id);
    
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }

        if ($request -> file('editImage')!=null){
            $product -> image = $fileName;
        }
    
        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return $this->getIndexAdmin();
    }

    


public function postAdminDelete($id){
    $product = product::find($id);
    $product-> delete();
    return $this -> getIndexAdmin();
}
}