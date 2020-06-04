<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloseDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('close_days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('cashier_id')->nullable();
            $table->string('date_close')->nullable();
            $table->string('hour_close')->nullable();
            $table->bigInteger('value_card')->default(0);
            $table->bigInteger('value_cash')->default(0);
            $table->bigInteger('value_transfer')->default(0);
            $table->bigInteger('other_value')->default(0);
            $table->bigInteger('sales_total')->default(0);
            $table->bigInteger('total_cashier')->default(0);
            $table->bigInteger('total_open')->default(0);
            $table->bigInteger('tip_card')->default(0);
            $table->bigInteger('tip_cash')->default(0);
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
        Schema::dropIfExists('close_days');
    }
}
