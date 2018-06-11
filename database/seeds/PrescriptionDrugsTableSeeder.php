<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrescriptionDrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('prescription_drugs')->truncate();

         DB::table('prescription_drugs')->insert([	
          ['name' => 'ACIKY-SP TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AMARYL 2MG TAB(30 TAB)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'BACLOF SYRUP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AVIL INJs',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ALPRAX 0.5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AMLOPIN 5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'AVAS 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'AMLOPIN AT TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'AMLOPIN 2.5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
          ['name' => 'ATARAX 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ARKAMIN TAB 1*30 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ARACHITOL 6 LAC INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AMITONE 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AVAS 40TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'BETACAP PLUS 5MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'AMLONG 5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AUGMENTIN DDS SYRUP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ALEX SYR',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AZORAN TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AMARYL M 2MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'AKILOS-P TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'ATEN 50MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'AKT 3 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AMICIN 250MG INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'BETADINE OINT',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	

        ['name' => 'BAND AID (LONG)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AZOPRINE 50 MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
        ['name' => 'ARICEP 5MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ATORVA 40MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AVAS 20MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'AVIL 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'ALPRAX 0.25 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'ATEN 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'AMARYL 1MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ALTRADAY CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'BETACAP TR 40',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'AMLOPIN 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
         ['name' => 'AMANTREL CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'AZITHRAL 500MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
       ],	
	
         ['name' => 'AMICIN 500MG INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'AMLOPRES AT 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ANSET 2ML INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'BACLOF 10MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'BETADINE SOLU',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'BETALOC 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'BEVON SYRUP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'BEXOL 2MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
        ['name' => 'BIO D3 MAX',	
          'doctor' => 'dr.rakesh shah',	
         'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CALCIVEG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CALDISON D3 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CANDID B CREAM',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
         'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
        ['name' => 'CARDACE 5MG CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CEFACTAM FORTE 1.5GM',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CEFUZACT CV 625MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CEFXETIL 500 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CHEKBAK D3 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CHEST LEADS(SWAROMED)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CILACAR 10',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CILOWAY 100 MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CIPLAR 40MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CIPLAR LA 20MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CIPLAR LA 40',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CIPLOX E&E DROPS',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CISTAZ 100MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CLINDAC A GEL',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CLOBA 10MG.TAB.',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CLOBA 5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'CLOBATOR 5 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
          ['name' => 'CLOBATOR-10',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CLONOTRIL 0.25 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CLOPITAB A 150',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CLOPIVAS 75MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CLOPIVAS AP 150 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CLOPIVAS AP 75MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'COMBIFLAM SYR',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'COMBIFLAM TAB 20',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
        ['name' => 'COMBUTOL 600MG TAB',	
          'doctor' => 'dr.rakesh shah',	

          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
        ['name' => 'CONTRAMAL 100MG INJ/2ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	


          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CONTRAMAL 50MG INJ/1ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
	
          ['name' => 'COTTON ROLL',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'CREMAFFIN PLUS 110ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'CREMALAX TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'CRESTOR 5 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'CROCIN ADVANCE',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'CTD 12.5 MG 15 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],		
           ['name' => 'CTD-6.25 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'CYCLOPAM TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'CYRA 20MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'D.F.O GEL 30GM',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DABISTAR 150MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'DAFLON 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DALACIN C 300MG CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DAN MR TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DAN P TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

           ['name' => 'DEPLATT A 150MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DEPLATT A 75 (15 TAB)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DEPRAN L',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DIAMOX 0.25GM TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DILZEM 30MG TAB  15 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DIO 1 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DIOMINIC  DCA',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
           ['name' => 'DIS SYRINGE WITH NEEDLE 2ML L.L',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DIS SYRINGE WITHOUT NEEDLE 50ML L.L',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DISTINON TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DIZITAC TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DOLO 650MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DOMSTAL TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DONAMEM 5 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DOXY 1  L-FORTE CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'DROXYL 250MG DT TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

         ['name' => 'DROXYL 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DULCOFLEX SUPPOSITORIES (CHILD)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DUOLIN RESPULES',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DUPHALAC SYR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DYNAPAR INJ 1ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DYNAPAR TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'DYTOR 10',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'ECOKET 200MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),		
         ],	
	
          ['name' => 'ECOSPRIN 150MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ECOSPRIN 75MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ECOSPRIN AV 150/20',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ECOSPRIN AV 150MG  CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ECOSPRIN AV-75MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ECOSPRIN GOLD 20MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ECOSPRINE GOLD 10MG FORTE CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ELIWEL 10MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ELTROXIN 25 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ELTROXIN TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'EMESET 4MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ENCORATE 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ENCORATE CHRONO 200MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ENCORATE CHRONO 300MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ENCORATE CHRONO 400MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'ENCORATE CHRONO 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ENZOFLAM TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'EPSOLIN TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'EPSOLIN-300 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'EPTOIN 100MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'EPTOIN 300ER CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	

          ['name' => 'EPTOIN SYR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'ETHILON 2.0 NW3336 (CUT)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'EVION 400MG CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'EXERCISING BALL',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'FAMCIMAC 250',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'FDSON MP FORTE TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'FDSON MP TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'FDSON TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'FEBRINIL INJ 2 ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FELIZ-S PLUS 10 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FEMALE CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FERONIA XT',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FLAVEDONE MR TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FLUANXOL 0.5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FLUNER 5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FLUNIL 10MG CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FOLCI HCT TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FOLEY CATHETER NO.16',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FOLITRAX7.5',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FOLVITE MB TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'FOLVITE TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FOLYDOL M',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FOSOLIN INJ 2ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'FRISIUM 10MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'FRISIUM 5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GABANTIP AT 100 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GABANTIP AT TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GABAPIC -AT',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'GABAPIN 100MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'GABAPIN 300MG CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GALLANT DISPO PREP RAZOR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GAMJEE ROLL',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'GARDENAL 30MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GARDENAL 60MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'GAUZE SWAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'GEMER-2 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GERBISA 10MG SUPPOSATORY',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GLIMISON M 2',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GLOVES DISPO NO.6.5 [KALTEX]',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'GLOVES DISPO NO.7(KL)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GLOVES DISPO NO.7.5(KALTEX)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GLOVES DISPO NO.7.5(KARETEX)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GLOVES PLASTIC',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GLOVES RUBBUR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'GLYCERIN',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GLYCIPHAGE 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GLYNASE MF TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GRAVITOR-60MGTAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'GRILINCTUS SYR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'HISONE 10MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'HOMOCHEK',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'HOSIT 500INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'HYDROPHILIC FOAM SILVER PAD',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'I GEL 3',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'I GEL NO 4',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'I.V.SET',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'IBUGESIC PLUS SYR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'IMDUR 30MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'INMECIN 25MG CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'IRRIGATTO',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	

           ['name' => 'IVABID 5',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'JELONET 10PS',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'KABIPRO 400MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	

          ['name' => 'KEPPRA 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'KETOROL DT TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'L DIO1',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LANCET',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LANOXIN TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LASILACTONE 50MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LASIX INJ(4ML)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'LASIX TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LEVEPSY 500 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'LEVERA 100ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LEVERA 250',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LEVERA 500 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LEVERA 750MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'LEVIPIL 500MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'LEVIPIL 750MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LEVOFLOX 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LIMCEE TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LINID TAB 600MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LIVOGEN CAPTAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LIVOGEN Z CAPTAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'LMWX 60MG INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LOBAZAM 10 MD',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LOBAZAM 10MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LOBAZAM 5 MD',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LOBAZAM 5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'LOBAZEM 20 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LONAZEP 0.25',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LONAZEP 0.5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'LONAZEP MD 0.25',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LOPEZ INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LOSAR 25MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LOSAR 50MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LTK 25MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

           ['name' => 'LTK 50MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'LTK- H TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	


         ],	
	
           ['name' => 'LTK-AM TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'M.V.I.INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MAHAFLOX 400 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MALE CATH(LARGE)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'MAXGALIN 50',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'MAXGALIN 75',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MAXIMIN FORTE TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'MAZETOL 100MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'MAZETOL 200MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'MAZETOL SR 200MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'MAZETOL SR 300MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'MBSON SL TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

            ['name' => 'MEDROL 16MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'MEDROL 4MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
           ['name' => 'MEDROL 8MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MEFTAL SPAS TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MEROTEC 2GM',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'MET XL 12.50',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
           ['name' => 'MET XL 25   (15 TAB)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'MET XL 50 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'METHYCOBAL INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'METPURE XL-25MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'METROGYL 400MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MIDACIP 1.25 NASAL SPRAY',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MINIPRESS XL 2.5MG TAB.',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MINIPRESS XL 5MG TAB(1*30)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MMF TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
	
          ['name' => 'MOISOL EYE DROPS',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MONTEK LC',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'MYOLAXIN D OINT',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'NAPROSYN 250MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NAPROSYN 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NAXDOM 250',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'NEOMIT 4ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NEOPRATE 5ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

          ['name' => 'NEUROBION FORTE TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NEXITO 5MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NEXITO FORTE',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NICARDIA RET 20MG TAB.',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NIKORAN 5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NIMODIP TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NIPRO 10CC',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NIPRO 5CC',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NORFLOX 400MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NUROKIND 500',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'NUROKIND OD INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'OMNACORTIL 10MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OMNACORTIL 2.5',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OMNACORTIL 20MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OMNACORTIL 40MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OMNACORTIL 5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ONCOTREX 7.5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ONDEM MD 4MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ONDEM MD 8MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OPTINURON INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OSON 200MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OXETOL 150MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OXETOL 300MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'OXETOL 450 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'PACITANE TAB (30 TAB)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'PANPRAZOLE 40 INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'PANTAKIND TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'PANTOCID 40MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'PANTOCID DSR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PANTOP 40MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PANTOP-D CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PARKITIDIN 100MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PIOZ 15MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PLAGERINE A 150',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PMSON ER TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'POSIFLUSH SP 5ML SOLUTION',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

           ['name' => 'POTKLOR SYR',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'POWERGESIC MR TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PPSON 40 CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PPSON DSR CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PRADAXA 150 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PRAMIPEX 0.25MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PRAMIPEX 0.5 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PRAMIPEX 1',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PRAMIPEX ER0.75',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PRAZOPRESS XL 5 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGABA 75',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGABA M 75',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGABA M SR 75MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGABICA-MC CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGABID 75MG CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	

           ['name' => 'PREGABID ME 75',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGABID NT TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREGALIN M 75',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREVA-AS 150MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PREVENAR 13 INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PROCTO CLYSS ENEMA',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PROLET 25',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PROLET 50',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PROLOMET AM 50',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PROLOMET XL 50',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'PYZINA 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'QUTAN 25 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'R 90 URETHRAL CATHETER',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'R.L  AP 500ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'RABELA 20MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'RANITIN INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'RANTAC 150MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'RASALACT 0.5 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'RASALECT 1MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'RBSON CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'RBSON-D',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'REJUNEX',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'REJUNURON PLUS INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

         ],	
	
          ['name' => 'RESODIM 15',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'REVOCON TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'RICHMOIST CREAM',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'RIDOL TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'RIVOTRIL 0.5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ROMOLENE 16',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ROSUVAS 10',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ROSUVAS-20 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'ROTASURE VACCINE',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SCALP VEIN SET 22',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SCALP VEIN SET 24 (JMS)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SELOKEN XL 25MG TAB 30S',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SHELCAL 500MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SHELCAL -CT TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SIBELIUM 10MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'SIBELIUM 5MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'SILICONE FOLEY CATH NO.14',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
         ['name' => 'SILICONE FOLEY CATH NO.16',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SILVEREX CREAM',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SL B12 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SODIUM CHLORIDE (CLARIS)500ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SODIUM CHLORIDE 100ML(CORE)',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SOFRAMYCIN CREAM',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SOLONEX DT 100MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SPASMO PROXYVON PLUS CAP',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'SPENZO 0.5 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'SPINFREE TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STAR DRAPE140X150',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STEMETIL MD 5MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STERILLIUM SOLU500ML',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STILNOCT 12.5MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STORVAS 10MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STORVAS 20 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STORVAS 40 MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'STUGERON 25MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'SYMBAL 20MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'SYNCAPONE 100',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'SYNDOPA CR 125 TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'SYNDOPA CR TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'SYNDOPA PLUS TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'TAZIRA LYO 4.5 INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'TEGRITAL 100MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'TEGRITAL CR 200MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'TEGRITAL CR 300',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
             ['name' => 'TEGRITAL CR 400MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
             ['name' => 'TELMA  AM',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
            ['name' => 'TELMA 20MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'TELMA 40MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'TELMIRIDE 40MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'TETANUS TOXID INJ',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'THEMIPAN 40MG',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'THIOKOL A TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'THRIZE PLUS',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
           ['name' => 'THROMBOPARIN5000',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
-	
         ],	
-	
           ['name' => 'THYRONORM 100MG TAB',	
           'doctor' => 'dr.rakesh shah',	
           'type'=>'Neurology',	
           'status'=>'1',	
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
         ],	
	
          ['name' => 'THYRONORM 12.5',	

          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
        ['name' => 'CONTRAMAL 100MG INJ/2ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CONTRAMAL 50MG INJ/1ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
	
         ['name' => 'COTTON ROLL',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CREMAFFIN PLUS 110ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CREMALAX TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CRESTOR 5 MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CROCIN ADVANCE',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'CTD 12.5 MG 15 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'CTD-6.25 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'CYCLOPAM TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'CYRA 20MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'D.F.O GEL 30GM',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DABISTAR 150MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DAFLON 500MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DALACIN C 300MG CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DAN MR TAB',	
         'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DAN P TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
       ],	
	
          ['name' => 'DEPLATT A 150MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DEPLATT A 75 (15 TAB)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
       ],	
	
          ['name' => 'DEPRAN L',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
         'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DIAMOX 0.25GM TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DILZEM 30MG TAB  15 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DIO 1 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DIOMINIC  DCA',	
         'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DIS SYRINGE WITH NEEDLE 2ML L.L',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DIS SYRINGE WITHOUT NEEDLE 50ML L.L',	
          'doctor' => 'dr.rakesh shah',	
         'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DISTINON TAB',	
          'doctor' => 'dr.rakesh shah',	
         'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DIZITAC TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DOLO 650MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DOMSTAL TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DONAMEM 5 MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DOXY 1  L-FORTE CAP',	
         'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'DROXYL 250MG DT TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'DROXYL 500MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DULCOFLEX SUPPOSITORIES (CHILD)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DUOLIN RESPULES',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DUPHALAC SYR',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DYNAPAR INJ 1ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DYNAPAR TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'DYTOR 10',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
       ],	
	
         ['name' => 'ECOKET 200MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRIN 150MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRIN 75MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRIN AV 150/20',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRIN AV 150MG  CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRIN AV-75MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRIN GOLD 20MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ECOSPRINE GOLD 10MG FORTE CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ELIWEL 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ELTROXIN 25 MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ELTROXIN TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'EMESET 4MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ENCORATE 500MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ENCORATE CHRONO 200MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ENCORATE CHRONO 300MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ENCORATE CHRONO 400MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ENCORATE CHRONO 500MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'ENZOFLAM TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'EPSOLIN TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'EPSOLIN-300 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'EPTOIN 100MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'EPTOIN 300ER CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'EPTOIN SYR',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ETHILON 2.0 NW3336 (CUT)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'EVION 400MG CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'EXERCISING BALL',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'FAMCIMAC 250',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'FDSON MP FORTE TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'FDSON MP TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'FDSON TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'FEBRINIL INJ 2 ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FELIZ-S PLUS 10 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FEMALE CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FERONIA XT',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FLAVEDONE MR TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FLUANXOL 0.5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FLUNER 5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FLUNIL 10MG CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FOLCI HCT TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FOLEY CATHETER NO.16',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
     ],	
	
        ['name' => 'FOLITRAX7.5',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FOLVITE MB TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'FOLVITE TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FOLYDOL M',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FOSOLIN INJ 2ML',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FRISIUM 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'FRISIUM 5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GABANTIP AT 100 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'GABANTIP AT TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'GABAPIC -AT',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'GABAPIN 100MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'GABAPIN 300MG CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'GALLANT DISPO PREP RAZOR',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GAMJEE ROLL',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GARDENAL 30MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GARDENAL 60MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'GAUZE SWAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
        ['name' => 'GEMER-2 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GERBISA 10MG SUPPOSATORY',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'GLIMISON M 2',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'GLOVES DISPO NO.6.5 [KALTEX]',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GLOVES DISPO NO.7(KL)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'GLOVES DISPO NO.7.5(KALTEX)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'GLOVES DISPO NO.7.5(KARETEX)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'GLOVES PLASTIC',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'GLOVES RUBBUR',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'GLYCERIN',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'GLYCIPHAGE 500MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'GLYNASE MF TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'GRAVITOR-60MGTAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'GRILINCTUS SYR',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'HISONE 10MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'HOMOCHEK',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'HOSIT 500INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'HYDROPHILIC FOAM SILVER PAD',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'I GEL 3',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'I GEL NO 4',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'I.V.SET',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'IBUGESIC PLUS SYR',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'IMDUR 30MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'INMECIN 25MG CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'IRRIGATTO',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'IVABID 5',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'JELONET 10PS',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'KABIPRO 400MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'KEPPRA 500MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

     ['name' => 'KETOROL DT TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ],	
	
     ['name' => 'L DIO1',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LANCET',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LANOXIN TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LASILACTONE 50MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LASIX INJ(4ML)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LASIX TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LEVEPSY 500 MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'LEVERA 100ML',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LEVERA 250',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LEVERA 500 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LEVERA 750MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LEVIPIL 500MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LEVIPIL 750MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

    ],	
	
     ['name' => 'LEVOFLOX 500MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LIMCEE TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LINID TAB 600MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LIVOGEN CAPTAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LIVOGEN Z CAPTAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LMWX 60MG INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LOBAZAM 10 MD',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LOBAZAM 10MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LOBAZAM 5 MD',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LOBAZAM 5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LOBAZEM 20 MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LONAZEP 0.25',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LONAZEP 0.5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'LONAZEP MD 0.25',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LOPEZ INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

    ],	
	
      ['name' => 'LOSAR 25MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LOSAR 50MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LTK 25MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LTK 50MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LTK- H TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'LTK-AM TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'M.V.I.INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MAHAFLOX 400 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MALE CATH(LARGE)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MAXGALIN 50',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MAXGALIN 75',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MAXIMIN FORTE TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MAZETOL 100MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MAZETOL 200MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MAZETOL SR 200MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MAZETOL SR 300MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'MBSON SL TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'MEDROL 16MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'MEDROL 4MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MEDROL 8MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MEFTAL SPAS TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MEROTEC 2GM',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MET XL 12.50',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'MET XL 25   (15 TAB)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MET XL 50 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'METHYCOBAL INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'METPURE XL-25MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'METROGYL 400MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MIDACIP 1.25 NASAL SPRAY',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MINIPRESS XL 2.5MG TAB.',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MINIPRESS XL 5MG TAB(1*30)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

    ],	
	
     ['name' => 'MMF TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
	
     ['name' => 'MOISOL EYE DROPS',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MONTEK LC',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'MYOLAXIN D OINT',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'NAPROSYN 250MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NAPROSYN 500MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NAXDOM 250',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'NEOMIT 4ML',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NEOPRATE 5ML',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NEUROBION FORTE TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NEXITO 5MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NEXITO FORTE',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NICARDIA RET 20MG TAB.',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NIKORAN 5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NIMODIP TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NIPRO 10CC',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NIPRO 5CC',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NORFLOX 400MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NUROKIND 500',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'NUROKIND OD INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'OMNACORTIL 10MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OMNACORTIL 2.5',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

     ['name' => 'OMNACORTIL 20MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OMNACORTIL 40MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OMNACORTIL 5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'ONCOTREX 7.5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'ONDEM MD 4MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

     ['name' => 'ONDEM MD 8MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OPTINURON INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OSON 200MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OXETOL 150MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OXETOL 300MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'OXETOL 450 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'PACITANE TAB (30 TAB)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'PANPRAZOLE 40 INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'PANTAKIND TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'PANTOCID 40MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'PANTOCID DSR',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PANTOP 40MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PANTOP-D CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PARKITIDIN 100MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PIOZ 15MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PLAGERINE A 150',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PMSON ER TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'POSIFLUSH SP 5ML SOLUTION',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'POTKLOR SYR',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'POWERGESIC MR TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PPSON 40 CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

      ['name' => 'PPSON DSR CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PRADAXA 150 MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PRAMIPEX 0.25MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

      ['name' => 'PRAMIPEX 0.5 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PRAMIPEX 1',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PRAMIPEX ER0.75',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PRAZOPRESS XL 5 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABA 75',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABA M 75',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABA M SR 75MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABICA-MC CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABID 75MG CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABID ME 75',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREGABID NT TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

      ['name' => 'PREGALIN M 75',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREVA-AS 150MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PREVENAR 13 INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PROCTO CLYSS ENEMA',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PROLET 25',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PROLET 50',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

      ['name' => 'PROLOMET AM 50',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PROLOMET XL 50',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'PYZINA 500MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'QUTAN 25 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'R 90 URETHRAL CATHETER',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'R.L  AP 500ML',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'RABELA 20MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'RANITIN INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'RANTAC 150MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'RASALACT 0.5 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'RASALECT 1MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'RBSON CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'RBSON-D',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'REJUNEX',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'REJUNURON PLUS INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	

     ['name' => 'RESODIM 15',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'REVOCON TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'RICHMOIST CREAM',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'RIDOL TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'RIVOTRIL 0.5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'ROMOLENE 16',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'ROSUVAS 10',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'ROSUVAS-20 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'ROTASURE VACCINE',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SCALP VEIN SET 22',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SCALP VEIN SET 24 (JMS)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SELOKEN XL 25MG TAB 30S',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SHELCAL 500MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SHELCAL -CT TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SIBELIUM 10MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'SIBELIUM 5MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'SILICONE FOLEY CATH NO.14',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
    ['name' => 'SILICONE FOLEY CATH NO.16',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SILVEREX CREAM',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SL B12 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SODIUM CHLORIDE (CLARIS)500ML',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SODIUM CHLORIDE 100ML(CORE)',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SOFRAMYCIN CREAM',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SOLONEX DT 100MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SPASMO PROXYVON PLUS CAP',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'SPENZO 0.5 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'SPINFREE TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STAR DRAPE140X150',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STEMETIL MD 5MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STERILLIUM SOLU500ML',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STILNOCT 12.5MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STORVAS 10MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STORVAS 20 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STORVAS 40 MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'STUGERON 25MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'SYMBAL 20MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'SYNCAPONE 100',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'SYNDOPA CR 125 TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'SYNDOPA CR TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'SYNDOPA PLUS TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'TAZIRA LYO 4.5 INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'TEGRITAL 100MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'TEGRITAL CR 200MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'TEGRITAL CR 300',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
        ['name' => 'TEGRITAL CR 400MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
        ['name' => 'TELMA  AM',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
       ['name' => 'TELMA 20MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	   ],	
	
      ['name' => 'TELMA 40MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'TELMIRIDE 40MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'TETANUS TOXID INJ',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'THEMIPAN 40MG',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'THIOKOL A TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'THRIZE PLUS',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'THROMBOPARIN5000',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
      ['name' => 'THYRONORM 100MG TAB',	
      'doctor' => 'dr.rakesh shah',	
      'type'=>'Neurology',	
      'status'=>'1',	
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
    ],	
	
     ['name' => 'THYRONORM 12.5',	
>>>>>>> f2678c98ea2df5ecdb0398454621ee8ecd6236ba
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'THYRONORM 125',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
           ['name' => 'THYRONORM 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'THYRONORM 75MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TONOFOLIC-Z TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TOPAMAC 25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TOPAMAC 50MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	

        ],	
	
         ['name' => 'TOPMOL(PARACETAMOL) IV',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TORVASON 10',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TORVASON 200MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TORVASON 40',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TORVATE CRONO 200 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
       ],	
	
         ['name' => 'TORVATE CRONO 300 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TORVATE CRONO 500 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TRAZINE H TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'TRICIUM PTH INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TRIZORYL-2',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TROYCORT INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
         'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TRYPTOMER 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'TRYPTOMER 25 MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'UDP 5MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'UDP AT',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'ULTRACET SEMI',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'ULTRACET TAB(1*15)',	
          'doctor' => 'dr.rakesh shah',	
         'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'UNDERPAD',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'URINE BAG(ROMO 30) ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'URITOP 100MG',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'URO METER SET',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VALPARIN CHRONO 300MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VALPARIN CHRONO 500MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VALPARIN CRONO 200',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VALPARIN SYR',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VANSAFE-CP 1GM',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	

        ],	
	
           ['name' => 'VENFLON NO.20',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VENFLON NO.22',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
            ['name' => 'VERTIN 16MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
            ['name' => 'VERTIN 24',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
            ['name' => 'VITANOVA SG CAP',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
            ['name' => 'VITCOFOL INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
           ['name' => 'VOLINI GEL 15GM',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
         'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'VOVERAN INJ',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'WARF 2MG TAB(1*15)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'WARF 3MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'WARF 5MG TAB(1*15)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'WASA MOUSE SOLU.',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'WATER FOR INJ (CORE)',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
         'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'WYSOLON 20MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'XARELTO TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
         ['name' => 'XEPI RUB M',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'XYNOVA GEL',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),		
        ],	
	
          ['name' => 'ZAPIZ 0.25MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZAPIZ 0.5MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZEN RETARD 300MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZEN RETARD 400MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZEPTOL CR 200MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZEPTOL CR 300MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZEPTOL CR 400MG TAB',	
         'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZIFI 200MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZOLFRESH 10 MG 15 TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	          ['name' => 'ZOLFRESH 5MG',	
         'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZYRTEC 10MG TAB',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ],	
	
          ['name' => 'ZYTEE GEL',	
          'doctor' => 'dr.rakesh shah',	
          'type'=>'Neurology',	
          'status'=>'1',	
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),	
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),	
	
        ]		
	
    	]);	
    }
}
