<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ToastAuthenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $authenticated = $this->authenticate($request, $guards);
        if (!$authenticated) {
            return $this->unauthenticated($request, $guards);
        }

        return $next($request);
    }

    protected function authenticate($request, array $guards): bool
    {
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                $this->auth->shouldUse($guard);
                return true;
            }
        }

        return false;
    }

    protected function unauthenticated($request, array $guards)
    {
        return redirect()->back()->withInput()->with([
            'message' => __('translations.please-register'),
            'status' => 'error'
        ]);
    }
}
