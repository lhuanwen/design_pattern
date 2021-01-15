<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 9:57 下午
 */

namespace src\strategy;

class Json implements Strategy
{
    public function render($array)
    {
        return json_encode($array);
    }

}