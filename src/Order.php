<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 10:58 下午
 */

namespace src;

use SplObserver;

class Order implements \SplSubject
{
    /**
     * @var \SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /**
         * @var SplObserver $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}