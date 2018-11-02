<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course',function($table){
            $table -> increments('id');
            $table -> string('course_name',30) -> notNull();
            $table -> integer('profession_id') -> notNull();
            $table -> string('cover_img');
            $table -> integer('sort') -> notNull() -> default(0);
            $table -> string('description');
            $table -> timestamps();
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
        Schema::dropIfExists('course');
    }
}
