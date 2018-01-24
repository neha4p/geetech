<?php namespace App\Http\Middleware;

use Closure;
use \Auth as Auth;
use Redirect;

class isAdmin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role != 'admin') {
            return redirect()->route('restricted');
            //die('Sorry ' . Auth::user()->role . ' users do not have access to this area');
        }
        
        return $next($request);
    }
}
