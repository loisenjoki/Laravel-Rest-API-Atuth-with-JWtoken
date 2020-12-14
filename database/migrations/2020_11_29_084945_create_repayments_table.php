<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('instalment');
            $table->float('principal');
            $table->float('interest');
            $table->date('instalment_date');
            $table->tinyInteger('is_paid');
            $table->datetime('paid_on');
            $table->string('statement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repayments');
    }
}
