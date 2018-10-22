<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
	  protected $table = 'role_user';
    protected $fillable = [
        
        'role_id',
        'user_id',
        
        ];

    public function hasRole()
    {
        return $this->belongsTo('euro_hms\Models\Role','role_id');
    }
	

	
}
