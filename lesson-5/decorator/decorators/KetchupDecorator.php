<?php


namespace decorators;

class KetchupDecorator extends AbstractDecorator
{
    /**
     * @return mixed|void
     */
    public function operation()
    {
        $this->component->operation();
        echo '+ кетчуп ';
    }

}