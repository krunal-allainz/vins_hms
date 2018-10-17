<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Permission;

 class PermissionRepository 
 {
   
    public function getPermissionList(){
    	 return Permission::all();
    }

    public function addRolePermission($roleId,$permissionCheckList){
        dd($roleId);
        dd($permissionCheckList);
    }
 	
 }
?>
