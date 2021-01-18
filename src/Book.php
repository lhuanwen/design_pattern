<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/18
 * Time: 10:39 上午
 */

namespace src;

class Book
{
    public $id;
    public $name;
    public $isbn;
    public $price;

    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO(
            "mysql:host=localhost;dbname=test",
            "root",
            "123456"
        );
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function save()
    {
        $this->pdo->exec("insert into book (id,name,isbn,price) values(
{$this->getId()},'{$this->getName()}','{$this->getIsbn()}',{$this->getPrice()})");
    }
}