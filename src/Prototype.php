<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 11:30 下午
 */

namespace src;

class Prototype
{
    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        echo 'create' . PHP_EOL;
    }

    public function run()
    {

    }
}