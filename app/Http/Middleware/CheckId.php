<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $currentPath = $request->path();

        if (($currentPath === 'exchange' || $currentPath === 'confirm' || $currentPath === 'finish') && !$request->route('id')) {
            return redirect('/change');
        }

        return $next($request);
    }
}
