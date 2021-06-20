<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){

        if(Auth::attempt(['email' => $request-> email, 'password' => $request->password])){
            return Redirect::to('admin');
        }
        return back()->withInput()->with('error','Tên tài khoản hoặc mật khẩu sai');
     
    }
}
