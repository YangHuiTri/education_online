<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet',function($table){
            $table -> increments('id');
            $table -> tinyInteger('paper_id') -> notNull();
            $table -> tinyInteger('question_id') -> notNull();
            $table -> tinyInteger('member_id') -> notNull();
            $table -> enum('is_correct',[1,2]) -> notNull() -> default('2');
            $table -> tinyInteger('score') -> notNull() -> default(0);
            $table -> string('answer',1);
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
        Schema::dropIfExists('sheet');
    }
}
