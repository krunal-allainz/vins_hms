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
      'weight',
      'height',
      'bmi',
      'vitals',
      'pulse',
      'temp',
      'bp_systolic',
      'bp_diastolic'
    ];

    public function userDetails()
    {
        return $this->belongsTo('euro_hms\Models\User','consultant_id');
    }

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

      public function getOpdDetails(){

        return $this->hasMany('euro_hms\Models\OpdDetails');
      }

    public static function getPatientListByConsultDr($doctor,$section){
       $result = array();
      //if($section == 'OPD'){
       $patientList =PatientDetailsForm::where('consultant_id',$doctor)->get();
      //}
      
      foreach ($patientList as $key=>$value){
         $result[$key] = [
            'id' => $value->id,
            'name' =>  $value->first_name.' '.$value->last_name,
            'consultant' =>  $value->consultant_id,
            'dob' => $value->dob,
            'gender' =>  $value->gender,
            'address' =>  $value->address,
            'uhid_no' =>  $value->uhid_no
          ] ;
      }
     
     
      return  $result;
    }
}
