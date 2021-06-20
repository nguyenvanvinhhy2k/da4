<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function getProduct()
    {
        $data['cate'] = Product::paginate(10); 
        return view('backend.product.product',$data);
    }
    public function getAddProduct()
    {   
        $data['cates'] = Category::all();
        return view('backend.product.addproduct',$data);
    }
    public function postAddproduct(Request $request)
    {
        $filename = $request->product_image->getClientOriginalName();
        $cate =new Product();
        $cate ->product_name =$request->product_name;
        $cate ->product_price =$request->product_price;
        $cate ->product_image =$filename;
        $cate ->product_desc =$request->product_desc;
        $cate ->product_content =$request->product_content;
        $cate ->category_id =$request->category_id;
        $cate ->product_status =$request->product_status;       
        $cate ->save();
        $request->product_image->storeAs('upload/',$filename);
        return Redirect::to('admin/product');
        
    }
    public function getEditProduct($id)
    {
        $data['prod'] = Product::find($id);
        $data['cates'] = Category::all();
        return view('backend.product.editproduct',$data);
    }
    public function postEditProduct(Request $request,$id)
    {
        $cate = Product::find($id);
        $cate ->product_name =$request->product_name;
        $cate ->product_price =$request->product_price;
        $cate ->product_desc =$request->product_desc;
        $cate ->product_content =$request->product_content;
        $cate ->category_id =$request->category_id;
        $cate ->product_status =$request->product_status;  
        if($request->hasFile('product_image')){
            $filename = $request->product_image->getClientOriginalName();
            $cate ->product_image =$filename;
            $request->product_image->storeAs('upload/',$filename);
        }
        $cate->save();
        return Redirect::to('admin/product');
    }
    public function delete($id)
    {
        Product::destroy($id);
        return Redirect::to('admin/product');
    }
    // public function Search(Request $request)
    // {
    //     $search = $request->seach;
    //     $data['prod'] = Product::where('product_name','like','%'.$search.'%')->paginate(6);
    //     return view('backend.product.product',$data);
    // }
}
