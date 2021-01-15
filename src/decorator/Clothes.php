<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/11
 * Time: 6:12 下午
 */

namespace src\decorator;

class Clothes implements IComponent
{
    protected $component;

    public function decorate(IComponent $component)
    {
        $this->component = $component;
    }

    public function display()
    {
        if (!empty($this->component)) {
            $this->component->display();
        }
    }

}