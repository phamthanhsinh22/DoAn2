<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function getlogin(){
        return view('Login.login');
    }
    public function postlogin(Request $request){
        $arr = [
            'email' => $request ->email,
            'password'=>$request->password, 
        ];
        if(Auth::attempt($arr)){
            return redirect('admin');
        }else
        {
            return redirect('dangnhap');
        }
    }
     public function getlogout1(){
        Auth::logout();
        return redirect('dangnhap')->with('notice','Ban da dang xuat thanh cong');
    }
}
