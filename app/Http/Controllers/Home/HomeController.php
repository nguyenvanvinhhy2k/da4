<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Oder;
use App\OderDetail;
use App\Customer;




class HomeController extends Controller
{
    public function getindex(){
        $new_product=Product::Where('product_status',1)->paginate(8);
        $top_product=Product::Where('product_status',0)->paginate(8);      
        return view('pages.home',compact('new_product','top_product'));
    }
    public function getloaisanpham($id){
        $sp_theoloai=Product::Where('category_id',$id)->paginate(3);
        $sp_khac=Product::Where('category_id','<>',$id)->paginate(3);
        $loai=Category::all();
        return view('pages.loaisanpham',compact('sp_theoloai','sp_khac','loai'));       
    }
    public function getchitietsanpham($id){
        $sanpham = Product::Where('product_id',$id)->first();
        $sp_tuongtu=Product::Where('category_id',$sanpham->category_id)->whereNotIn('product_id',[$id])->take(3)->get();
        return view('pages.chitietsanpham',compact('sanpham','sp_tuongtu'));
    }
    public function getgioithieu(){
        return view('pages.gioithieu');
    }
    public function getlienhe(){
        return view('pages.lienhe');
    }
    //cart
    public function addToCart($id)
    {
         $product = Product::Where('product_id',$id)->first();
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity']=$cart[$id]['quantity']+1;

        }else{
            $cart[$id]=[
                'name'=>$product->product_name,
                'price'=>$product->product_price,
                'quantity'=>1,
                'image'=>$product->product_image,
                'product_id'=>$product->product_id,
            ];
        }
        $count=count($cart);
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'messega'=>'success',
            'count'=>$count

        ],200);
        
    }
    public function showCart(){
        $carts =session()->get('cart');
        return view('pages.cart',compact('carts'));
      }
      public function updateToCart(Request $request)
      {
          if($request->id && $request->quantity){
              $carts = session()-> get('cart');
              $carts[$request->id]['quantity'] = $request->quantity();
              session()->put('cart',$carts);
              $data['carts'] = session()->get('cart');
              $cart_update = view('pages.cart',$data)->render();
              return response()->json(
                  ['cart'=>$cart_update,
                  'code'=>200],
                  200);
          }
      }
   
      public function deleteCart(Request $request)
      {
          if($request->id){
              $carts = session()->get('cart');
              unset($carts[$request->id]);
              session()->put('cart',$carts);
              $data['carts']=session()->get('cart');
              $cart_delete = view('pages.cart',compact('carts'))->render();
              return response()->json(['cart'=>$cart_delete,'code'=>200
                  ],
                200);               
          }
      }
      public function Checkout()
      {
      $data['carts'] =session()->get('cart');
//   dd( $data['carts']);
     return view('pages.checkout',$data);
      }
      public function postCheckout(Request $req)
      {
        $carts =session()->get('cart');       
        $user =session()->get('id');
         $oder=new Oder;
         $oder->id_customer=$user;
         $oder->name = $req ->name;
         $oder->address = $req ->address;
         $oder->email = $req ->email;
         $oder->phone = $req ->phone;       
         $oder->date_oder = date('Y-m-d');                  
         $oder->payment = $req ->payment;
         $oder->note = $req ->notes;
         $oder->status=0;
         $oder->save();

          foreach ($carts as $key => $value) {
           $oderdetail=new OderDetail();
          $oderdetail->id_oder = $oder->id;
          $oderdetail->id_prod= $key;
          $oderdetail->quantity= $value['quantity'];
          $oderdetail->unit_price= $value['price'];
          $oderdetail->save(); 
        
          }
        Session::forget('carts');
    
     return Redirect::to('/check-out');
    }
    public function login()
    {
        return view('pages.loginaa');
    }
    public function postlogin(Request $request)
    {
        
        $result = Customer::where('email',$request->email)->where('password',$request->password)->first();
        if($result){

         session()->put('id',$result->id);
           session()->put('name',$result->name);
             return Redirect::to('/');
        }
        else{
           return back();
        }
    }
    public function getlogout()
    {
        session::put('id','');
        return Redirect::to('/');
    }
    public function Search(Request $request)
    {
        $search = $request->seach;
        $data['prod'] = Product::where('product_name','like','%'.$search.'%')->paginate(6);
        return view('backend.product.product',$data);
    }



}
