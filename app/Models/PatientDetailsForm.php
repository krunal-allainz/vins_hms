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
    ];

    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setDobDateAttribute($value)
    {
      dd($value);
        $new_val = $value['time']." 00:00:00";
        $this->attributes['dob'] =   Carbon::createFromFormat('d-m-Y', $value);

    }

      public function getIpdDetails()
      {
          return $this->hasMany('euro_hms\Models\IpdDetails');
      }
}
