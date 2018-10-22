<?php

namespace euro_hms\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use euro_hms\Duro85\Roles\Exceptions\PermissionDeniedException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Illuminate\Http\RedirectResponse;

class checkPermission
{

     /**
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
    * @param int|string $permission
     * @return mixed
     * 
     */
    public function handle($request, Closure $next, $permission)
    {
       
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }
      //  try {
             if ($this->auth->check() && $this->auth->user()->can($permission)) {
            return $next($request);
         }
        //}catch (TokenExpiredException $e) {

          //  return $this->respond('tymon.jwt.expired', 'token_expired', $e->getStatusCode(), [$e]);
        //}
        // $locale = \Request::header('locale');
        //App::setLocale($locale);
      //  return  redirect()->route('api\auth\logout');
        return redirect('api\auth\logout'); 
     // return response(['authenticated' => false,'message'=>'Account de-activated please contact your administrator.',401]);
       //throw new PermissionDeniedException($permission);
    }


     protected $except = [
        //
        '/logout'
    ];
}
