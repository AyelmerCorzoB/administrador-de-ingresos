<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (session('rol') !== $role) {
            return redirect('/login');
        }

        return $next($request);
    }
}
