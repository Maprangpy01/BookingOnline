<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Session\Store;
use Auth;
use Session;
use Illuminate\Support\Facades\Log;

class SessionExpired
{
    protected $session;
    protected $timeout;

    public function __construct(Store $session){
        $this->session = $session;
        $this->timeout = config('envpath.Timeout');
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $isLoggedIn = $request->path() != '/logout';
    //     if(!session('lastActivityTime')) {
    //         $this->session->put('lastActivityTime', time());
    //     } elseif(time() - $this->session->get('lastActivityTime') > $this->timeout) {
    //         $this->session->forget('lastActivityTime');
    //         cookie('intend', $isLoggedIn ? url()->current() : '404');
    //         auth()->logout();
    //     }
    //     // dd(time() - $this->session->get('lastActivityTime') > $this->timeout);
    //     $isLoggedIn ? $this->session->put('lastActivityTime', time()) : $this->session->forget('lastActivityTime');
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next): Response
    {
        $isLoggedIn = $request->path() != '/';
        if(!session('lastActivityTime')){
            Log::info("time");
            $this->session->put('lastActivityTime', time());}
        elseif(time() - $this->session->get('lastActivityTime') > $this->timeout){
            Log::info("timeout");
            $this->session->forget('lastActivityTime');
            $this->session->forget('MemberID');
            $this->session->forget('MemberStatus');
            $this->session->forget('CusFullName');
            $this->session->forget('Token');
            $this->session->forget('SubScriptionStatus');
            $message = config('envpath.MessageTimeout');

            // $cookie = cookie('intend', $isLoggedIn ? url()->current() : '/sign-in');
            auth()->logout();
            return redirect()->route('OverviewIndex')->with('message', $message)->with('alertType', 'info');
            // return message('You had not activity in '.$this->timeout/60 .' minutes ago.', 'warning', 'login')->withCookie($cookie);
        }
        $isLoggedIn ? $this->session->put('lastActivityTime', time()) : $this->session->forget('lastActivityTime');
        return $next($request);
    }
}
