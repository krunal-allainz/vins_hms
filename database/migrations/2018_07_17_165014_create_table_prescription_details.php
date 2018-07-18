<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrescriptionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opd_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('prescription_drug_id')->nullable();
            $table->integer('total_quantity')->nullable();
            $table->integer('total_prescription_days')->nullable();
            $table->integer('clock_quantity_1')->nullable();
            $table->integer('clock_quantity_2')->nullable();
            $table->integer('clock_quantity_3')->nullable();
            $table->string('clock_time_1')->nullable();
            $table->string('clock_time_2')->nullable();
            $table->string('clock_time_3')->nullable();
            $table->string('clock_suggest_1')->nullable();
            $table->string('clock_suggest_2')->nullable();
            $table->string('clock_suggest_3')->nullable();
            $table->string('remove')->nullable();
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
        Schema::dropIfExists('prescription_details');
    }
}
