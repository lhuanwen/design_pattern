<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 7:40 下午
 */

namespace src;

class SimpleFactory
{
    /**
     * @return Single
     */
    public static function createRedis()
    {
        return Single::getInstance();
    }
}