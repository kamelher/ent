<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicusagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticusages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('link');
            $table->string('certificatlink');
            $table->integer('user_id')->unsigned();
            $table->integer('tictype_id')->unsigned();
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
        Schema::drop('ticusages');
    }
}
