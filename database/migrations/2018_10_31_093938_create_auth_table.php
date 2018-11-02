<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建表
        Schema::create('auth',function(Blueprint $table){
            $table -> increments('id');//主键id
            $table -> string('auth_name',20) -> notNull();//权限名称
            $table -> string('controller',40) -> nullable();//权限对应的控制器
            $table -> string('action',30) -> nullable();//权限对应的方法
            $table -> tinyInteger('pid');//当前权限父级id
            $table -> enum('is_nav',[1,2]) -> notNull() -> default('1');//是否作为菜单显示
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //删除表
        Schema::dropIfExists('auth');
    }
}
