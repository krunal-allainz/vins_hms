<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePatientCheckup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_checkup', function (Blueprint $table) {
            //
             $table->integer('patient_case_management_id')->nullable();
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
        Schema::table('patient_checkup', function (Blueprint $table) {
            //
        });
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
