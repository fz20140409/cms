<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable=['pid','name','route','icon','sort','ishow'];
}
