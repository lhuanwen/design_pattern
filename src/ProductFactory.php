<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/15
 * Time: 7:06 下午
 */

namespace src;

use src\factory\DigitalProduct;
use src\factory\ShippableProduct;

class ProductFactory
{
    public function createShippableProduct()
    {
        return new ShippableProduct();
    }

    public function createDigitalProduct()
    {
        return new DigitalProduct();
    }

}