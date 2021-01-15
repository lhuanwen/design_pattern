<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/15
 * Time: 7:11 下午
 */

namespace src;

use src\factory\FormatNumber;
use src\factory\FormatString;

class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}