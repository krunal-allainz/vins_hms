<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_drugs', function (Blueprint $table) {  
            $table->increments('id');  
            $table->string('name')->nullable();    
            $table->string('doctor')->nullable();  
            $table->enum('type', ['Neurosurgery','Neurology','Vascular'])->nullable(); 
            $table->boolean('status'); 
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('prescription_drugs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
