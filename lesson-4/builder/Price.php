<?php


class Price
{
    /**
     * @var float
     */
    public $value;


    /**
     * Price constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->value = $price;
    }
}