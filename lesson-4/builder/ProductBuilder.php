<?php


class ProductBuilder
{
    /**
     * @var Name
     */
    private $name;
    /**
     * @var Price
     */
    private $price;
    /**
     * @var Discount
     */
    private $discount;

    /**
     * @param Name $name
     */
    public function setName(Name $name)
    {
        $this->name = $name;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * @param Price $price
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @param Discount $discount
     */
    public function setDiscount(Discount $discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return Discount
     */
    public function getDiscount(): Discount
    {
        return $this->discount;
    }

    /**
     * @return Product
     */
    public function build(): Product
    {
        return new Product($this);
    }

}