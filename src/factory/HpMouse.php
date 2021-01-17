<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 12:27 上午
 */

namespace src\factory;

class HpMouse implements Mouse
{
    public function sayHi()
    {
        var_dump('HP Mouse');
    }

}