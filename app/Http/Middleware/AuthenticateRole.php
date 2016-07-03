<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateRole
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
        // Get the required roles from the route
        $roles = $this->getRequiredRoleForRoute($request->route());
        // Check if a role is required for the route, and
        // if so, ensure that the user has that role.
        if(!Auth::guard($guard)->guest()){
            if($request->user()->hasRole($roles) || !$roles)
            {
                return $next($request);
            }
        }else{
            return redirect()->guest('login');
        }

        abort(401);
    }

    private function getRequiredRoleForRoute($route)
    {
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }
}
