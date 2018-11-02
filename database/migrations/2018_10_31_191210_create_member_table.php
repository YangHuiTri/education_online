<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建表
        Schema::create('member',function($table){
            $table -> increments('id'); 
            $table -> string('username',20) -> notNull();
            $table -> string('password') -> notNull();
            $table -> enum('gender',[1,2,3]) -> nutNull() -> default('1');
            $table -> string('mobile',11);
            $table -> string('email',40);
            $table -> string('avatar');
            $table -> timestamps();
            $table -> rememberToken();
            $table -> enum('type',[1,2]) -> notNull() -> default('1');
            $table -> enum('status',[1,2]) -> notNull() -> default('2');
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
        Schema::dropIfExists('member');
    }
}
