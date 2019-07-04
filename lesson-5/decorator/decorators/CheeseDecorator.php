<?php


namespace decorators;

class CheeseDecorator extends AbstractDecorator
{
    /**
     * @return mixed|void
     */
    public function operation()
    {
        $this->component->operation();
        echo '+ сыр ';
    }

}