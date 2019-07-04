<?php

namespace leafes;

use components\Component;

class Leaf1 implements Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * Leaf1 constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Component $child
     */
    public function add(Component $child)
    {
    }

    /**
     * @param Component $child
     */
    public function remove(Component $child)
    {
    }

    public function display()
    {
        echo '  ' . $this->name;
    }

}