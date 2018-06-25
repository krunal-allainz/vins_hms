<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UrineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('urine')->truncate();

        DB::table('urine')->insert([
	       
	      	[ 
	        	'name' => 'Routine',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Microscopy',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Culture / Sensitivity',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	]
	      	
	    ]);
    }
}
