<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class PatientCaseManagment extends Model
{
    //
     protected $table = 'patient_case_managment';

        protected $fillable=[
              'case_type',
              'opd_id',
              'patient_id',
              'status',
        ];
}
