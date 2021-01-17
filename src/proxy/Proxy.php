<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 2:01 上午
 */

namespace src\proxy;

class Proxy implements Shop
{
    public function buy($title)
    {
        $this->go();
        (new CDShop())->buy($title);
    }

    public function go()
    {
        echo '跑去香港代购' . PHP_EOL;
    }
}