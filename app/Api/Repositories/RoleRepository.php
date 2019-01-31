<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Role;
use euro_hms\Models\RoleUser;


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

    public function getRoleName($roleId){
      return Role::select('name')->where('id',$roleId)->first();
    }

    public function roleListWithPaggination($noOfRecord){

        $data = Role::paginate($noOfRecord);
        return $data;
    }

    public function deleteRoleById($roleId){
        return Role::find($roleId)->delete();
    }
    
    public function getRoleById($roleId){
       return Role::where('id', $roleId)->first();

    }
    
    public function editRoleById($roleId,$roleName,$slug,$desc)
    {
      return Role::where('id',$roleId)->update(
          array(
                'name' => $roleName,
                'slug' => $slug,
               'description' => $desc
               ));
    }
    
    public function addUserRole($roleId,$userId)
    {
        $oldRoles = 0;
        $oldRoles = RoleUser::where('user_id',$userId)->count();
        if( $oldRoles == 0){
            $addRole = RoleUser::create([
               'role_id' => $roleId,
               'user_id' => $userId
               ]);    
           }
        elseif($oldRoles == 1){
            $addRole =  RoleUser::where('user_id',$userId)
                ->update([
                'role_id' => $roleId,
                ]);
        }else{
            $removeOld = RoleUser::where('user_id',$userId)->delete();
            $addRole = RoleUser::create([
                'role_id' => $roleId,
                'user_id' => $userId
                ]);
        }
       
        return $addRole;
    }
    
    public function checkExistUserRole($userId){
        return RoleUser::where('user_id',$userId)->get();

    }
    
     public function updateUserRole($roleId,$userId)
    {
     
     return RoleUser::where('user_id',$userId)->update([
      'role_id' => $roleId,
                               ]);
    }

    public function getRoleUserId($userId){
       return RoleUser::where('user_id',$userId)->first();
    }
    
    
 	
 }
?>
