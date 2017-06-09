<?php

namespace App\Http\Controllers\Tools;

class Tree
{
    //
    static  $treeList = array();

    static function createTree($orig_data,$pid=0,$repeat_str='--',$count=0,$step=3){
        foreach ($orig_data as $v){
            if($v['pid']==$pid){
                $v['name']=str_repeat($repeat_str,$count).$v['name'];
                self::$treeList[]=$v;
                self::createTree($orig_data,$v['id'],$repeat_str,$count+$step);
            }

        }
        return self::$treeList;
    }
}
