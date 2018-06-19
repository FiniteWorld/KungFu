<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->foreign('id')->references('id')->on('students');
            $table->increments('p_id');
            $table->string('p_name');
            $table->string('p_lname');
            $table->string('relation');
            $table->string('p_email');
            $table->string('p_contact');
            $table->string('p_rank');
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
        Schema::dropIfExists('parents');
    }
}
