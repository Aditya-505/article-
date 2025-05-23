<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;

class isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->routeIs('Genre.*', 'Game*') && Auth::user()->is_Admin !== 1) {
            abort(403, 'Unauthorized action');
        }
        return $next($request);
    }
}
