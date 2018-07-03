<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class Radiology extends Model
{
    //
        protected $table = 'radiology';

        protected $fillable=[
              'opd_id',
              'type',
              'subtype',
              'bodyparts',
              'qualifiers',
              'special_request',
              'details',
              'attachments',
        ];
}
