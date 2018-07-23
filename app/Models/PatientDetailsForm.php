<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PatientDetailsForm extends Model
{
    protected $table = 'patient_details';
    protected $appointment_datetime = 'd-m-Y H:i:s';

    protected $fillable=[
      'uhid_no',
      'date',
      'time',
      'first_name',
      'middle_name',
      'last_name',
      'dob',
      'gender',
      'address',
      'ph_no',
      'mob_no',
      'references',
      'consultant',
      'case_type',
      'consultant_id',
      'appointment_datetime',
     /* 'weight',
      'height',
      'bmi',
      'vitals',
      'pulse',
      'temp',
      'bp_systolic',
      'bp_diastolic'*/
    ];

    /**
     * [userDetails description]
     * @return [type] [description]
     */
    public function userDetails()
    {
        return $this->belongsTo('euro_hms\Models\User','consultant_id');
    }

    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setDobAttribute($value)

    { 
        return $this->attributes['dob'] =   Carbon::createFromFormat('d-m-Y', $value);

    }

     public function getAppointmentDatetimeAttribute($value)
    { 
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

     public function setAppointmentDatetimeAttribute($value)
    { 
      return $this->attributes['appointment_datetime'] =   Carbon::createFromFormat('d-m-Y H:i:s', $value);
    }

      public function getIpdDetails()
      {
          return $this->hasMany('euro_hms\Models\IpdDetails');
      }

      public function getOpdDetails(){

        return $this->hasMany('euro_hms\Models\OpdDetails');
      }

    
}
