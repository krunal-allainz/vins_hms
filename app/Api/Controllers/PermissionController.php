<?php

namespace euro_hms\Api\Controllers;
use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use euro_hms\Api\Repositories\PermissionRepository;

class PermissionController extends Controller
{
    //

      public function __construct(){
        $this->premissionObj = new PermissionRepository();
       }

    	/**
    	*
    	**/

    	public function getPermissionList(){
            $result = $this->premissionObj->getPermissionList();
            if($result)
            {
                return ['code' => 200 ,'data'=>$result,'message'=>'Permission succeesfully listed.'];
            }
            else
            {
                return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
            }
    	}

    /**
    *
    **/

    public function addRolePermission(Request $request){
        $roleId = $request->roleId;
        $permissionCheckList[]  = $request->seletedPermisionList;
         $result = $this->premissionObj->addRolePermission($roleId,$permissionCheckList);
            if($result)
            {
                return ['code' => 200 ,'data'=>$result,'message'=>'Role permission succeesfully Created.'];
            }
            else
            {
                return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
            }

    }

    /**
    *
    **/


    public function checkPermissionForRole(Request $request){
        $roleId = $request->roleId;
         $result = $this->premissionObj->checkPermissionForRole($roleId);
            if($result)
            {
                return ['code' => 200 ,'data'=>$result,'message'=>'Role permission succeesfully get.'];
            }
            else
            {
                return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
            }

    }
}
