<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        // dd($request->path());
        $user = $request->user();
      //  if ($request->url() == "http://127.0.0.1:8000/premium")
      //  {
            //$user->credit -= 10;
      //      return $next($request);
      //  }
        if(auth()->user()->isAdmin()) {
            return $next($request);
        }
        else if($request->path() == "premium" && $user->credit > 0)
            return $next($request);
        return abort(403, 'Unauthorized.');
    }
}