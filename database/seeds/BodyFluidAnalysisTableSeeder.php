<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BodyFluidAnalysisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('body_fluid_analysis')->truncate();

        DB::table('body_fluid_analysis')->insert([
	       
	      	[ 
	        	'name' => 'Culture / Sensitivity',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	]
	      	
	    ]);
    }
}
