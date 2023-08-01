<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;

class DetermineLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     *
     * @return mixed
     *
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($lang = $request->cookie('lang')) {
            $lang = explode('|', Crypt::decryptString($lang))[1];
            app()->setLocale($lang);
        }
        return $next($request);
    }
}
