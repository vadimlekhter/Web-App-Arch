<?php


class Name
{
    /**
     * @var string
     */
    public $value;


    /**
     * Name constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->value = $name;
    }
}