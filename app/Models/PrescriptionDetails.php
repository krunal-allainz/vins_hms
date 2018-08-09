<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionDetails extends Model
{
    //
        protected $table = 'prescription_details';

        protected $fillable=[
              'opd_id',
              'user_id',
              'prescription_drug_id',
              'how_many_times',
              'total_quantity',
              'total_prescription_days',
              'clock_quantity_1',
              'clock_quantity_2',
              'clock_quantity_3',
              'clock_time_1',
              'clock_time_2',
              'clock_time_3',
              'clock_suggest_1',
              'clock_suggest_2',
              'clock_suggest_3',
              'remove',
              
        ];

        
}
