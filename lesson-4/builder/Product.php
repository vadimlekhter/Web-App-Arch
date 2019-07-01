<?php


class Product
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var float
     */
    public $price;
    /**
     * @var int
     */
    public $discount;


    /**
     * Product constructor.
     * @param ProductBuilder $builder
     */
    public function __construct(ProductBuilder $builder)
    {
        $this->name = $builder->getName();
        $this->price = $builder->getPrice();
        $this->discount = $builder->getDiscount();
    }
}