<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string[] ...$guards
     * @return mixed
     */
    public function handle($request, \Closure $next, ...$guards)
    {
        if ($this->auth->guard($guards)->guest()) {
            return $this->redirectTo($request) ?: $next($request);
        }

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
        if (!$request->session()->has('MemberID')) {
            $referer = $request->headers->get('referer', null);
            if ($referer) {
                session()->put('url.intended', $referer);
            }
            return redirect()->route('SignInIndex');
        }
    }
}
