<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CSFTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('csf')->truncate();

        DB::table('csf')->insert([
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
	      	],
	      	[ 
	        	'name' => 'Other',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	]
	    ]);
    }
}
