<?php
/**
 * Created by PhpStorm.
 * User: gz20170629g
 * Date: 2017/10/30
 * Time: 14:08
 */

namespace Jiangxianli\SiteMap;


class SiteMap
{
    static $ALWAYS = 'always';
    static $HOURLY = 'hourly';
    static $DAILY = 'daily';
    static $WEEKLY = 'weekly';
    static $MONTHLY = 'monthly';
    static $YEARLY = 'yearly';
    static $NEVER = 'never';

    /**
     * 链接地址
     *
     * @var
     */
    protected $loc;

    /**
     * 最新更新时间
     *
     * @var
     */
    protected $last_mod;

    /**
     * 更新频率
     *
     * @var
     */
    protected $change_freq;

    /**
     * 权重
     *
     * @var
     */
    protected $priority;

    /**
     * 构造函数
     *
     * SiteMap constructor.
     * @param $loc
     * @param $last_mod
     * @param $change_freq
     * @param $priority
     */
    public function instance($loc, $last_mod, $change_freq, $priority)
    {
        $this->loc = $loc;
        $this->last_mod = $last_mod;
        $this->change_freq = $change_freq;
        $this->priority = $priority;
    }

    /**
     * 设置链接
     *
     * @param $loc
     * @author jiangxianli
     * @created_at 2017-10-30 15:11:53
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
    }

    /**
     * 设置更新时间
     *
     * @param $last_mod
     * @author jiangxianli
     * @created_at 2017-10-30 15:12:06
     */
    public function setLastMod($last_mod)
    {
        $this->last_mod = $last_mod;
    }
}