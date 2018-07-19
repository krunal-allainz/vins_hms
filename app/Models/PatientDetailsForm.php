<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PatientDetailsForm extends Model
{
    protected $table = 'patient_details';

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

    public function setDobDateAttribute($value)

    { //dd($value);
         if(isset($value['time'])){
          $new_val = $value['time']." 00:00:00";
        }
        return $this->attributes['dob'] =   Carbon::createFromFormat('d-m-Y', $value);

    }

     public function setDateTimeAttribute($value)
    { //dd($value);
         if(isset($value['time'])){
          $new_val = $value['time']." 00:00:00";
        }
        return $this->attributes['dob'] =   Carbon::createFromFormat('d-m-Y H:i:s', $value);
// =======
//     {
//       //dd($value);
//         $new_val = $value['time']." 00:00:00";
//         //$this->attributes['dob'] =   Carbon::createFromFormat('d-m-Y', $value);
//         $this->attributes['dob'] =   Carbon::createFromFormat('Y-m-d', $value);
// >>>>>>> f4372cfad0367e50626684d0db5ab3d6e3243f8e

    }

      public function getIpdDetails()
      {
          return $this->hasMany('euro_hms\Models\IpdDetails');
      }

      public function getOpdDetails(){

        return $this->hasMany('euro_hms\Models\OpdDetails');
      }

    
}
