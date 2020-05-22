<?php

namespace App\Http\Middleware;

use Closure;
use App\Contracts\UserRole;

class DashboardAccess
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
        if(!auth()->check()) {
            return redirect(route('login'));
        }

        if (!in_array(auth()->user()->role, UserRole::hasAccessToDashboard())) {
            abort(403);
        }

        return $next($request);
    }
}
