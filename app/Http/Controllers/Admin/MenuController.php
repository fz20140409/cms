<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends BaseController
{
    //
    function index()
    {
        $menus=Menu::paginate(10);
        return view('admin/menu/index',compact());

    }
}
