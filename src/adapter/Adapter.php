<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 8:51 下午
 */

namespace src\adapter;

interface Adapter
{
    public function connect($host, $user, $password, $dbname);
    public function query($sql);
    public function close();
}