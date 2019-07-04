<?php

namespace components;

interface Component
{
    /**
     * @param Component $child
     * @return mixed
     */
    public function add(Component $child);

    /**
     * @param Component $child
     * @return mixed
     */
    public function remove(Component $child);

    /**
     * @return mixed
     */
    public function display();
}