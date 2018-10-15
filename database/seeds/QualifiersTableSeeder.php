<?php

use Illuminate\Database\Seeder;

class QualifiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('qualifiers')->truncate();
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Stroke Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Epilepsy Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Headache Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Tumor Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Brain (Routine)'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Brain with Head &Neck MR Angiography(MRA)'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Brain with IntracranialMRA/MR Venography'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Brain MR Spectroscopy alone'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Brain Tumour Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>1,
	            'name'=>'Other'
        	],

        ]);

       DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>3,
	            'name'=>'Stroke Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>3,
	            'name'=>'Epilepsy Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>3,
	            'name'=>'Headache Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>3,
	            'name'=>'Tumor Protocol'
        	],

        ]);
         DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>4,
	            'name'=>'Stroke Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>4,
	            'name'=>'Epilepsy Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>4,
	            'name'=>'Headache Protocol'
        	],

        ]);
        DB::table('qualifiers')->insert([
            [
            	'radiology_id'=>3,
	            'bodyparts_id'=>4,
	            'name'=>'Tumor Protocol'
        	],

        ]);
        
    }
}
