<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\UserInf;
use Illuminate\Support\Facades\DB;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/student/subjects');
        }
      //  $user = Auth::user;
      //  $userinf = DB::table('UserInf')->where('user_id', $user->id);
      //  if($userinf->role_id == 3)
      //  {
      //      return redirect('/student/subjects');
      //  }
      //  if($userinf->role_id == 2)
      //  {
      //      return redirect('/teacher/cabinet');
      //  }
       return $next($request);
    }
}
