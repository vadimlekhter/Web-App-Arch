<?php


namespace decorators;

use components\AbstractComponent;

abstract class AbstractDecorator extends AbstractComponent
{
    /**
     * @var AbstractComponent
     */
    protected $component;

    /**
     * AbstarctDecorator constructor.
     * @param AbstractComponent $component
     */
    public function __construct(AbstractComponent $component)
    {
        $this->component = $component;
    }
}