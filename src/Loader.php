<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/9
 * Time: 11:56 下午
 */

namespace src;

class Loader
{
    public static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}