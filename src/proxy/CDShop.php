<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 2:00 上午
 */

namespace src\proxy;

class CDShop implements Shop
{
    public function buy($title)
    {
        echo "购买成功，这是你的《{$title}》唱片" . PHP_EOL;
    }

}