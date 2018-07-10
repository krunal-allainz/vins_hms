<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionDetails extends Model
{
    //
        protected $table = 'prescription_details';

        protected $fillable=[
              'opd_id',
              'prescription_drug_id',
              'quantity',
              'medicine_time',
              'user_id',
        ];

        
}
