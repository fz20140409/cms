<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Tools\Tree;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends BaseController
{
    //
    function index()
    {
        $menus = Menu::all()->toArray();
        $menus = Tree::createTree($menus);
        return view('admin/menu/index', compact('menus'));

    }

    function create()
    {
        $menus = Menu::all()->toArray();
        $menus = Tree::createTree($menus, 0, '&nbsp;&nbsp;');
        return view('admin/menu/show', compact('menus'));
    }
    function store(Request $request){
        $this->validate($request,[
            'pid'=>'required',
            'name'=>'required',
            'route'=>'required',
            'sort'=>'nullable|integer',
        ]);
        $menu=Menu::create([
            'pid'=>$request->pid,
            'name'=>$request->name,
            'route'=>$request->route,
            'ishow'=>$request->ishow,
            'icon'=>$request->icon,
            'sort'=>$request->sort,
        ]);
        if($menu){
            session()->flash('success','添加成功');
            return redirect()->back();
        }else{
            session()->flash('danger','添加失败');
            return redirect()->back()->withInput();
        }


    }

}
