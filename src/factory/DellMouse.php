<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 12:26 上午
 */

namespace src\factory;

class DellMouse implements Mouse
{
    public function sayHi()
    {
        var_dump('Dell Mouse');
    }

}