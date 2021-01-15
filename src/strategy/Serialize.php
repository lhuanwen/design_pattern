<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 9:56 下午
 */

namespace src\strategy;

class Serialize implements Strategy
{
    public function render($array)
    {
        return serialize($array);
    }

}