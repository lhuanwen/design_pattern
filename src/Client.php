<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 2:03 上午
 */

namespace src;


use src\proxy\Proxy;

class Client
{
    public static function shopping($goods)
    {
        $proxy = new Proxy();
        $proxy->buy($goods);
    }
}