<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 8:55 下午
 */

namespace src\Adapter;

class MySQLi implements Adapter
{
    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = mysqli_connect($host, $user, $password, $dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}