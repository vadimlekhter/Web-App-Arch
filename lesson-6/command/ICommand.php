<?php


interface ICommand
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function unexecute();
}