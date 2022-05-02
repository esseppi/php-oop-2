<?php

class Product
{
    public function __construct($_titolo, array $_availablePeriod, float $_price)
    {
        $this->titolo = $_titolo;
        $this->availablePeriod = $_availablePeriod;
        $this->originalPrice = $_price;
    }

    public function getDiscountedPrice($_answr)
    {
        $this->isClient = $_answr;
        if ($this->isClient = true) {
            $this->finalPrice = $this->originalPrice * (1 - 0.2);
        } else $this->finalPrice = $this->originalPrice;
    }
}


$productOne = new Product('Sweetie', ['Jan', 'Feb'], 100.1);
$productOne->getDiscountedPrice(true);
var_dump($productOne);

$SunCream = new Product('SunCream', ['Jul', 'Aug'], 50.1);
$productOne->getDiscountedPrice(false);
var_dump($SunCream);
