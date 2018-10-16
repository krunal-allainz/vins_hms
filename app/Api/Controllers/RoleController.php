<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;

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
    	$roleName = $request->data->roleName;
    	$slug =  $request->data->slug;
    	$desc = $request->data->slug;
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
}
