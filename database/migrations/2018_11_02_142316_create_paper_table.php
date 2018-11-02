<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper',function($table){
            $table -> increments('id');
            $table -> string('paper_name',50) -> notNull();
            $table -> tinyInteger('course_id') -> notNull();
            $table -> tinyInteger('score') -> notNull() -> default(100);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
