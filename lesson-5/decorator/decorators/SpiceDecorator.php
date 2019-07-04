<?php


namespace decorators;

class SpiceDecorator extends AbstractDecorator
{
    /**
     * @return mixed|void
     */
    public function operation()
    {
        $this->component->operation();
        echo '+ острый ';
    }

}