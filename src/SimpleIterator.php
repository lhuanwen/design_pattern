<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/15
 * Time: 7:32 下午
 */

namespace src;

class SimpleIterator implements \Countable, \Iterator
{
    private $data;
    private $currentIndex = 0;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function current()
    {
        return $this->data[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
        next($this->data);
    }

    public function key()
    {
        return $this->currentIndex;
    }

    public function valid()
    {
        return isset($this->data[$this->currentIndex]);
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function count()
    {
        return count($this->data);
    }
}