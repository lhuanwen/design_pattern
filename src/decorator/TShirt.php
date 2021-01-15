<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/11
 * Time: 6:14 下午
 */

namespace src\decorator;

class TShirt extends Clothes
{
    public function display()
    {
        echo 'T恤 ';
        parent::Display();
    }
}