<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 11:07 下午
 */

namespace src\observer;

use SplSubject;

class Message implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        var_dump(222);
    }

}