<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 8:55 下午
 */

namespace src\adapter;

class MySQL implements Adapter
{
    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = mysql_connect($host, $user, $password);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return mysql_query($sql, $this->conn);
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}