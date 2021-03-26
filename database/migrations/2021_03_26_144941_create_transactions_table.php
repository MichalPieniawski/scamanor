<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proposed_offer');
            $table->unsignedBigInteger('id_target_offer');
            $table->boolean('confirmation');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('status');
            $table->foreign('id_proposed_offer')->references('id')->on('offers');
            $table->foreign('id_target_offer')->references('id')->on('offers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
