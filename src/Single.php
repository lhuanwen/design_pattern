<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/9
 * Time: 11:47 下午
 */

namespace src;

class Single
{
    /**
     * @var Single
     */
    private static $instance;

    /**
     * 获得实例（在第一次使用的时候创建）
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 构造方法声明为私有方法，禁止外部程序使用new实例化
     * 要使用单例，必须通过 Database::getInstance() 方法获取实例
     */
    private function __construct()
    {
    }

    /**
     * 声明成私有方法，禁止克隆对象 clone
     */
    private function __clone()
    {
    }

    /**
     * 声明成私有方法，禁止重建对象 unserialize(serialize($instance))
     */
    private function __wakeup()
    {
    }

}