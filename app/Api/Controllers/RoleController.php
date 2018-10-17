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
}
?>
