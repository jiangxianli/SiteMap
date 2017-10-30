<?php
/**
 * Created by PhpStorm.
 * User: gz20170629g
 * Date: 2017/10/30
 * Time: 14:08
 */

namespace Jiangxianli\SiteMap\MapDriver;


class SiteMap
{
    /**
     * 链接地址
     *
     * @var
     */
    private $loc;

    /**
     * 最新更新时间
     *
     * @var
     */
    private $last_mod;

    /**
     * 更新频率
     *
     * @var
     */
    private $change_freq;

    /**
     * 权重
     *
     * @var
     */
    private $priority;

    /**
     * 构造函数
     *
     * SiteMap constructor.
     * @param $loc
     * @param $last_mod
     * @param $change_freq
     * @param $priority
     */
    public function __construct($loc, $last_mod, $change_freq, $priority)
    {
        $this->loc = $loc;
        $this->last_mod = $last_mod;
        $this->change_freq = $change_freq;
        $this->priority = $priority;
    }
}