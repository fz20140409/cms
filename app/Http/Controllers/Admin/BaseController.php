<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    //
    function __construct()
    {   //是否认证
        $this->middleware('admin_auth', [
            'except' => ['showLogin', 'login']
        ]);
        //是否授权
    }
}
