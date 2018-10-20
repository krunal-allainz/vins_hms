<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use euro_hms\Api\Repositories\RoleRepository;

class RoleController extends Controller
{
    //
    public function __construct(){
        $this->roleObj = new RoleRepository();
    }

    /**
    *
    *
    *
    *
    *
    **/
    public function createRole(Request $request){
         $data = $request->all()['data'];
    	$roleName = $data['rolename'];
    	$slug =  $data['slug'];
    	$desc = $data['description'];
    	$result = $this->roleObj->create($roleName,$slug,$desc);
    	 if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'Role succeesfully Created.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }


    }

    /**
    *
    *
    **/

    public function getRole(){
        $result = $this->roleObj->getRole();
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'Role succeesfully Created.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }
    }

    /**
    *
    *
    *
    **/
    public function roleListWithPaggination(Request $request){
        $noOfRecord = $request->noOfRecord;
        $result = $this->roleObj->roleListWithPaggination($noOfRecord);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'Role succeesfully Created.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        }

    }

    /**
    *
    *
    **/

    public function deleteRole(Request $request){
        $roleId = $request->roleId;
        
        $result = $this->roleObj->deleteRoleById($roleId);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'Role succeesfully Deleted.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        }        

    }
    
    /**
     **
     **/
    
    public function getRoleDetail(Request $request){
        
         $roleId = $request->roleId;
        $result = $this->roleObj->getRoleById($roleId);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'Role detail succeesfully get.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        }  
        
    }
    
    /**
     **
     **/
    
    public function editRole(Request $request){
          $data = $request->all()['data'];
    	$roleName = $data['rolename'];
    	$slug =  $data['slug'];
    	$desc = $data['description'];
        $roleId = $request->roleId;
        
        $result = $this->roleObj->editRoleById($roleId,$roleName,$slug,$desc);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'Role succeesfully Update.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        }  
    }
    

    /**
     *
     *
     **/
    
    public function addUserRole(Request $request){
           $roleId = $request->roleId;
           $userId = $request->userId;
        $result = $this->roleObj->addUserRole($roleId,$userId);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'User Role detail succeesfully add.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        } 
    }
    
    /**
     *
     *
     **/
    
    public function checkExistUserRole(Request $request){
         $userId = $request->userId;
         $result = $this->roleObj->checkExistUserRole($userId);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'User Role exist'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        } 
    }
    
    /**
     *
     *
     **/
    
    public function updateUserRole(Request $request){
         $roleId = $request->roleId;
           $userId = $request->userId;
        $result = $this->roleObj->updateUserRole($roleId,$userId);
         if($result)
        {
            return ['code' => 200 ,'data'=>$result,'message'=>'User Role detail succeesfully update.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];;

        } 
    }
}                                                                                                                           
?>
