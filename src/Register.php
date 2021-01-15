<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 8:06 下午
 */

namespace src;

class Register
{
    /**
     * 定义存储对象数组
     * @var array
     */
    private static $objects = [];

    /**
     * 设置键值并保存进 $objects
     * @param string $key
     * @param mixed $object
     */
    public static function set($key, $object)
    {
        self::$objects[$key] = $object;
    }

    /**
     * 获取对象
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        if (!isset(self::$objects[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        return self::$objects[$key];
    }
}