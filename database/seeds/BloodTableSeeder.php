<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BloodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blood')->truncate();

        DB::table('blood')->insert([
	        [ 
	        	'name' => 'CBC',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'CBC ESR',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'CRP',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Culture / Sensitivity',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Electrolytes',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Creatinine',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'LFT',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'SGOT',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'SGPT',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'GGT',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Alkaline Phosphatase',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'HIV',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'HBeAg',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'HCV',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'RBS',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'FBS',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'PP2 BS',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Pre operative OT package',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Pre Cath Package',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'PT',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'a PTT',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'INR',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Clotting Time / Bleeding Time',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'RA Factor',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Uric Acid',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Anti CCP autobodies',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'ANA',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'ANA Profile',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Anti DNA',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Thyriod Profile',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Free T3',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Free T4',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum TSH',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Cortisol (Evening)',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Cortisol (Morning andEvening)',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Cortisol (Morning)',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum ACTH',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum IGF-1',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Prolactin',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Testosterone',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Ketones',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	],
	      	[ 
	        	'name' => 'Serum Ammonia',
	          	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	          	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	      	]

        ]);
    }
}
