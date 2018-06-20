<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_payments', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->foreign('id')->references('id')->on('students');
            $table->string('purchase_type');
            $table->date('purchase_date')->nullable();
            $table->integer('purchase_amount');
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
        Schema::dropIfExists('stu_payments');
    }
}
