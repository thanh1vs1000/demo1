<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('company_id')->nullable();
        $table->string('payment_id');
        $table->string('payer_id');
        $table->string('payer_email');
        $table->float('money', 10, 2);
        $table->date('date');
        $table->string('currency');
        $table->string('payment_status');
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
        Schema::dropIfExists('payments');
    }
}
