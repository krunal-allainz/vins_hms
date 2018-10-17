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
	

	public function permissions() {
  	 return $this->belongsToMany(Permission::class,'roles_permissions');
	}
}
