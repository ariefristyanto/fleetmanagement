<?php

namespace App\Http\Middleware;

use Closure;
use Theme;

class ThemeSelector
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
        // Using session to avoid looking up company from DB for each request (since theme is set in the company)
        $theme = session('theme');
        if (empty($theme))
        {
            Theme::init(env('DEFAULT_THEME', 'default'));
        }
        else
        {
            Theme::init($theme);
        }

        return $next($request);
    }
}
