<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionClockDetails extends Model
{
    //
        protected $table = 'prescription_clock_details';

        protected $fillable=[
              'prescription_id',
              'clock_time',
              'clock_quantity',
        ];

        
}
