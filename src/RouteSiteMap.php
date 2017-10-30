<?php

namespace Jiangxianli\SiteMap;

class RouteSiteMap extends SiteMap
{
    /**
     * 构造函数
     *
     * SiteMap constructor.
     * @param $change_freq
     * @param $priority
     */
    public function __construct($change_freq = '', $priority = 1.0)
    {
        $this->change_freq = $change_freq ?: self::$WEEKLY;
        $this->priority = $priority;
    }
}