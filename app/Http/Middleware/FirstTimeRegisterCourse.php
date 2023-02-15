<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FirstTimeRegisterCourse
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
        if(count(auth()->user()->registrations) < 1) {
            return redirect()->route('student.register.course');
        }
        return $next($request);
    }
}
