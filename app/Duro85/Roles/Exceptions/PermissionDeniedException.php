<?php

namespace euro_hms\Duro85\Roles\Exceptions;
use Exception;
use Session;
use Auth;
use Redirect;
use AuthenticatesUsers;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;

class PermissionDeniedException extends  Exception
{
    /**
     * Create a new permission denied exception instance.
     *
     * @param string $permission
     */
    public function __construct($permission)
    {
        //$this->message = sprintf("test.", $permission);
       // Session::flash('logout','You are not authorise to access this page'); 
        //return redirect('/login');
        return response()->json(['message' => 'You are not authorise to access this page'], 200);
    }
}
