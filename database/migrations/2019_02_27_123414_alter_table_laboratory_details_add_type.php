<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLaboratoryDetailsAddType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('laboratory_details', function (Blueprint $table) {
            //
            $table->integer('laboratory_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::table('laboratory_details', function (Blueprint $table) {
            //
        });
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
