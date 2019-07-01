<?php


class One
{
    /**
     * @var int
     */
    public $a = 1;
    /**
     * @var string
     */
    public $className;


    /**
     * One constructor.
     */
    public function __construct()
    {
        $this->className = static::class;
    }

    public function __clone()
    {
        $this->a = $this->a + 1;
        $this->className = 'Cloned object';
    }
}