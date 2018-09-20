<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class Radiology extends Model
{
    //
        protected $table = 'radiology_details';

        protected $fillable=[
              'opd_id',
              'user_id',
              'type',
              'subtype',
              'bodyparts',
              'qualifiers',
              'special_request',
              'details',
              'attachments',
              'referance',
              'body_part_side',
              'radiology_other',
              'type_name'
        ];
}
