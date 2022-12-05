<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //登录页面
    public function index(){
        return view('login');
    }
    //登录
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空'
        ]);
        $credentials = $request->only('username', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors('用户名或密码错误');
        }
        return redirect('index');
    }
}
