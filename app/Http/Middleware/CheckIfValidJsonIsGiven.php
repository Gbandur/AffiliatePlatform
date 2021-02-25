<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfValidJsonIsGiven
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        json_decode($request->getContent());

        if (json_last_error() != JSON_ERROR_NONE) {
            // There was an error
            abort(400, 'Bad JSON received');
        }

        // JSON decoding didn’t throw error; continue
        return $next($request);
    }
}
