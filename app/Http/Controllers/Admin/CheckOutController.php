<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Oder;
use App\OderDetail;
use App\Customer;


class CheckOutController extends Controller
{
    public function getCheckOut()
    {
      $data['cate'] = Oder::where('status',0)->get();
    //    dd($data);

    return view('backend.oder.manage_oder',$data);    
    }
    public function delete($id)
    {
        Oder::destroy($id);
        return Redirect::to('admin/oder');
    }
    public function getViewOder($id)
    {
     $data['oderdetail']= OderDetail::where('id_oder',$id)->get();
  // dd($data['odedetail']);
     return view('backend.oder.view_oder',$data);
    }
    public function processed($id)
    {
      $oder = Oder::find($id);
      $oder->status = 1;
      $oder->save();
      return Redirect::to('admin/oder/proces');
    }
    public function getprocessed()
    {
      $data['oder'] = Oder::where('status',1)->get();
      return view('backend.oder.processed_oder',$data);
     
    }

}
