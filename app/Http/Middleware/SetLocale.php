<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        // Check if the locale is supported
        if (in_array($locale, ['en', 'vi'])) {
            app()->setLocale($locale);
        } else {
            // Check session for locale preference
            $sessionLocale = session('locale');
            if (in_array($sessionLocale, ['en', 'vi'])) {
                app()->setLocale($sessionLocale);
            } else {
                // Default to English if no valid locale is provided
                app()->setLocale('en');
            }
        }

        return $next($request);
    }
}
