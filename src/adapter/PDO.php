<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 9:01 下午
 */

namespace src\Adapter;

class PDO implements Adapter
{
    protected $conn;

    function connect($host, $user, $password, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}