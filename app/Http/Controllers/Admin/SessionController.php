<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends BaseController
{
    //展示登陆页面
    function showLogin()
    {
        return view('admin/session/login');
    }
    //处理登陆
    function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('admin_index_index');
        }else{
            session()->flash('danger','邮箱或密码错误');
            return redirect()->back()->withInput($request->only(['email']));
        }


    }
    //注销
    function logout(){
        Auth::logout();
        return redirect()->route('admin_session_logout');
    }

}
