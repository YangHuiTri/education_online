<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建表
        Schema::create('protype',function($table){
            $table -> increments('id');//主键id
            $table -> string('protype_name',20) -> notNull();//专业分类名
            $table -> tinyInteger('sort') -> notNull() -> default('0');//排序
            $table -> timestamps();
            $table -> enum('status',[1,2]) -> notNull() -> default('2');//状态，2表示正常
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
        Schema::dropIfExists('protype');
    }
}
