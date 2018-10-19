<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Role;

 class RoleRepository 
 {
   
    public function create($roleName,$slug,$desc){

    	return Role::create([
    		'name' => $roleName,
    		'slug' => $slug,
   			'description' => $desc, // optional
    		'level' => 1, // optional, set to 1 by default
		]);
    }
 
    public function getRole(){
    	 return Role::all();
    }

    public function roleListWithPaggination($noOfRecord){

        $data = Role::paginate($noOfRecord);
        return $data;
    }

    public function deleteRoleById($roleId){
        return Role::find($roleId)->delete();
    }
 	
 }
?>
