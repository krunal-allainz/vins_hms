<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Permission;
use euro_hms\Models\PermissionRole;

 class PermissionRepository 
 {
   
    public function getPermissionList(){
    	 return Permission::all();
    }

    public function addRolePermission($roleId,$permissionCheckList){
        foreach($permissionCheckList as $permissionList){
        	foreach($permissionList as $permission){
        		PermissionRole::create([
                   	'role_id' => $roleId,
    				'permission_id' => $permission,
        		]);
        	}
        }
       return true;
    }

    public function updateRolePermission($roleId,$permissionCheckList){

         $deleteOldPermission = PermissionRole::where('role_id',$roleId)->delete();
         //print_r($permissionCheckList);exit;
         foreach($permissionCheckList as $permissionList){
            foreach($permissionList as $permission){
                PermissionRole::create([
                    'role_id' => $roleId,
                    'permission_id' => $permission,
                ]);
            }
        }
       return true;
    }

    public function checkPermissionForRole($roleId){
    	$result=PermissionRole::select('permission_id as permissionId','role_id as roleId')->where('role_id',$roleId)->get();
    	return $result;
    }

    public function getRolePermissionList($permissionId){
        return Permission::where('id',$permissionId)->first();
    }
 	
 }
?>
