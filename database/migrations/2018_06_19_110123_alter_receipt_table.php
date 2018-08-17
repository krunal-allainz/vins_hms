<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receipt', function (Blueprint $table) {
            //
            $table->integer('case_type')->nullable();
            $table->integer('charges_type_id')->nullable();
            $table->integer('consultation_charges_id')->nullable(); 
            $table->integer('emergency_charges_id')->nullable();
            $table->integer('charges')->nullable();  
            $table->string('department')->nullable();
            $table->integer('neurological_procedures_id')->nullable();
            $table->integer('vascular_procedures_id')->nullable();
            $table->integer('procedures_charges')->nullable();
            $table->integer('other_charges_id')->nullable();
            $table->integer('other_charges')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipt', function (Blueprint $table) {
            //
        });
    }
}
