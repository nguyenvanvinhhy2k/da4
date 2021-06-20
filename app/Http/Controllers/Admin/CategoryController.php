<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function getCategory(){
        $data['cate'] = Category::paginate(10);        
        return view('backend.category.category',$data);
    }
    public function getAddCategory()
    {
        $data['cate'] = Category::all();    
        return view('backend.category.addcategory',$data);
    }
    public function postAddCategory(Request $request)
    {
        $cate =new Category();
        $cate ->name =$request->name;
        $cate ->ParentId =$request->ParentId;
        $cate ->Status =$request->Status;
        $cate ->save();
        return Redirect::to('admin/category');
    }
    public function getEditCategory($id)
    {
        $data['cate'] = Category::all();
        $data['cates'] = Category::find($id);
        return view('backend.category.editcategory',$data);
    }
    public function postEditCategory(Request $request,$id)
    {
        $cate = Category::find($id);
        $cate->name = $request->name;
        $cate->Status = $request->Status;
        $cate->save();
        return Redirect::to('admin/category');
    }
    public function delete($id)
    {
        Category::destroy($id);
        return Redirect::to('admin/category');
    }
}
