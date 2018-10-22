<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	  protected $table = 'roles';
    protected $fillable = [
        
        'name',
        'slug',
        'description',
        'level',
        ];
	

	public function permissionsRole() {
  	 return $this->belongsToMany(PermissionRole::class,'role_id');
	}
}
