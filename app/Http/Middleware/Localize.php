<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class Localize
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
        $locale = $request->segment(1);

        if (array_key_exists($request->segment(1), config('app.locales'))) {
            app()->setLocale($locale);
        } else {
            return redirect(config('app.locale') . '/' . $request->path());
        }

        URL::defaults(['locale' => $locale]);

        $request->route()->forgetParameter('locale');

        return $next($request);
    }
}
