<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->comment('父id');
            $table->string('name')->comment('菜单名');
            $table->string('route')->comment('路由');
            $table->boolean('ishow')->default(1)->comment('是否显示，1显示，0不显示');
            $table->string('icon',50)->nullable()->comment('图标');
            $table->smallInteger('sort',false,true)->nullable()->comment('排序');
            $table->boolean('isdel')->default(0)->comment('是否删除，1删除，0不删除');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
