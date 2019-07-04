<?php

namespace composites;

use components\Component;

class Composite1 implements Component
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var array
     */
    public $children = [];

    /**
     * Composite1 constructor.
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
        $this->children[$child->name] = $child;
    }

    /**
     * @param Component $child
     */
    public function remove(Component $child)
    {
        unset($this->children[$child->name]);
    }

    public function display()
    {
        echo $this->name . PHP_EOL . PHP_EOL;
        foreach ($this->children as $child) {
            echo $child->display() . PHP_EOL;
        }
    }
}