<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('receipt', function (Blueprint $table) {    
            $table->increments('id');  
            $table->integer('receipt_id')->nullable(); 
            $table->string('receipt_number')->nullable(); 
            $table->integer('patient_id')->nullable(); 
            $table->string('case_no')->nullable(); 
            $table->string('charges_name')->nullable();    
            $table->integer('amount')->nullable(); 
            $table->dateTime('date')->nullable();  
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
        Schema::dropIfExists('receipt');
    }
}
