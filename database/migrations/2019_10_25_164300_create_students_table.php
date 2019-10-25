<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->integer('suppervisingYear');
            $table->string('link');
            $table->string('firststudent')->nullable();
            $table->string('secondstudent')->nullable();
            $table->string('thirdstudent')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('typeencarement_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
