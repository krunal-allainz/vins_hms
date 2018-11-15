<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableRadiologyAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('radiology_attachments', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE radiology_attachments MODIFY  image longtext NULL;');
            $table->string('remove')->nullable()->default('false');
            $table->string('view')->nullable()->default('false');
            $table->string('type')->nullable();
            $table->integer('image_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('radiology_attachments', function (Blueprint $table) {
            //
        });
    }
}
