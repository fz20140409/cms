<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class SessionController extends BaseController
{
    //展示登陆页面
    function showLogin()
    {
        return view('home/session/login');
    }

    //处理登陆
    function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

    }

    function register()
    {
        return view('home/session/register');
    }
}
