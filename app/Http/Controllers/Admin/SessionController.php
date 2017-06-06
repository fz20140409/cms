<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class SessionController extends BaseController
{
    //展示登陆页面
    function showLogin()
    {
        return view('admin/session/login');
    }
    //处理登陆
    function login()
    {

    }
}
