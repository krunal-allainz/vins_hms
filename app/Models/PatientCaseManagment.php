<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PatientCaseManagment extends Model
{
    //
     protected $table = 'patient_case_managment';

        protected $fillable=[
              'case_type',
              'section_type',
              'section_id',
              'patient_id',
              'references',
              'consultant_id',
              'appointment_datetime',
              'status',
        ];


    public function getAppointmentDatetimeAttribute($value)
    { 
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

     public function setAppointmentDatetimeAttribute($value)
    { 
      return $this->attributes['appointment_datetime'] =   Carbon::createFromFormat('d-m-Y H:i:s', $value);
    }

}
