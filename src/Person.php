<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/11
 * Time: 6:00 下午
 */

namespace src;

use src\decorator\IComponent;

class Person implements IComponent
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function display()
    {
        echo $this->name;
    }

}