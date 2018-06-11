<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionDrugs extends Model
{
    //
        protected $table = 'prescription_drugs';

        protected $fillable=[
              'name',
              'doctor',
              'type',
              'status',
        ];
}
