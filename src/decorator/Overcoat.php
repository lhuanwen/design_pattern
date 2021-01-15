<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/11
 * Time: 6:17 下午
 */

namespace src\decorator;

class Overcoat extends Clothes
{
    public function display()
    {
        echo '大衣 ';
        parent::display();
    }

}