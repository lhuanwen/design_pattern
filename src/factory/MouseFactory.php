<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 12:28 上午
 */

namespace src\factory;

class MouseFactory
{
    /**
     * @param $type
     * @return Mouse
     */
    public static function createMouse($type = 0)
    {
        switch ($type) {
            case 0:
                return new DellMouse();
            case 1:
                return new HpMouse();
        }
    }
}