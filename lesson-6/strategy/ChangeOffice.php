<?php


/**
 * Class ChangeOffice
 */
class ChangeOffice
{
    protected $currency_pair;
    protected $value;
    protected $rate;

    /**
     * Exchange constructor.
     * @param IExchange $currency_pair
     * @param float $value
     * @param float $rate
     */
    public function __construct(IExchange $currency_pair, $value, $rate)
    {
        $this->currency_pair = $currency_pair;
        $this->value = $value;
        $this->rate = $rate;
    }

    /**
     * @return void
     */
    public function change()
    {
        $this->currency_pair->change($this->value, $this->rate);
    }

}