<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class LaboratoryDetails extends Model
{
    //
        protected $table = 'laboratory_details';

        protected $fillable=[
              'opd_id',
              'lab_type',
              'report',
              'user_id',
        ];
}
