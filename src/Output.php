<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/10
 * Time: 10:02 下午
 */

namespace src;

use src\strategy\Strategy;

class Output
{
    /**
     * @var Strategy
     */
    private $outputStrategy;

    /**
     * Output constructor.
     * @param Strategy $outputStrategy
     */
    public function __construct(Strategy $outputStrategy)
    {
        $this->outputStrategy = $outputStrategy;
    }

    /**
     * @param $array
     * @return mixed
     */
    public function renderOutput($array)
    {
        return $this->outputStrategy->render($array);
    }
}