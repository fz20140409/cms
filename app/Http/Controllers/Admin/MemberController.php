<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;


class MemberController extends BaseController
{
    //
    function index()
    {
        $users=User::paginate(10);
        return view('admin/member/index',compact('users'));

    }
}
