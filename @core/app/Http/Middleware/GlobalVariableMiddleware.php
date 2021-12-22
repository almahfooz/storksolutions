<?php

namespace App\Http\Middleware;

use App\Blog;
use App\Language;
use App\Menu;
use App\SocialIcons;
use App\SupportInfo;
use Closure;
use Illuminate\Support\Facades\Session;

class GlobalVariableMiddleware
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

        

        return $next($request);
    }
}
