<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);  // Get the first segment of the URL (the locale)

        // If the locale is valid, set it
        if (in_array($locale, ['en', 'ar'])) {
            app()->setLocale($locale);
        } else {
            // Default to English if the locale is not valid
            app()->setLocale('en');
        }

        return $next($request);
    }
}
