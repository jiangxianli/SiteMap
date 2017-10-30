<?php

namespace Jiangxianli\SiteMap\MiddleWare;

use Illuminate\Http\Request;
use Jiangxianli\SiteMap\RouteSiteMap;

class SiteMapMiddleWare
{
    /**
     * 中间件处理
     *
     * @param $request
     * @param \Closure $next
     * @return mixed
     * @author jiangxianli
     * @created_at 2017-10-30 15:01:09
     */
    public function handle(Request $request, \Closure $next)
    {
        $action = $request->route()->getAction();

        print_r($action);

        $url = $request->getBaseUrl();
        print_r($url);

        $site_map = isset($action['site_map']) ? $action['site_map'] : [];

        if ($site_map instanceof RouteSiteMap) {
//            $site_map->setLoc()
        }


        return $next($request);
    }

}