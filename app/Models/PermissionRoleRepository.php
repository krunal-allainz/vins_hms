<?php
namespace euro_hms\Api\Repositories;

use Carbon\Carbon;
use DB;
use euro_hms\Models\PermissionRole;

class PermissionRoleRepository 
 {

    public function __construct(){
        $this->permissionRoleObj = new PermissionRole();
    }

    

}