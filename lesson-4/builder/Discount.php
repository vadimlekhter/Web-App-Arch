<?php


class Discount
{
    /**
     * @var int
     */
    public $value;


    /**
     * Discount constructor.
     * @param int $discount
     */
    public function __construct(int $discount)
    {
        $this->value = $discount;
    }
}