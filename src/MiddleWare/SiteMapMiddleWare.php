<?php

namespace Jiangxianli\SiteMap\MiddleWare;

class SiteMapMiddleWare
{
    public function handle($request, \Closure $next)
    {
        $action = $request->route()->getAction();


        return $next($request);
    }

}