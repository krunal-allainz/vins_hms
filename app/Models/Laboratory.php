<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    //
    /*type=
		1=blood
		2=urine
		3=csf
		4=body fluid analysis
    */
    protected $table = 'laboratory';

    protected $fillable=[
      'name','type'
    ];
}
