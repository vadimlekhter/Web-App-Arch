<?php


namespace decorators;

class DoubleDecorator extends AbstractDecorator
{
    /**
     * @return mixed|void
     */
    public function operation()
    {
        $this->component->operation();
        echo '+ двойной ';
    }

}