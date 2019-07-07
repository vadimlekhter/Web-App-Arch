<?php


class Client
{
    protected $operationsStorage = [];
    protected $currentOperation;
    protected $historyItem;

    /**
     * Client constructor.
     */
    public function __construct($historyItem)
    {
        $this->history = new History();
        $this->historyItem = $historyItem;
    }


    public function makeOperation()
    {
        (new HistoryCommand($this->history, $this->historyItem))->execute();
    }

    public function undo()
    {

    }

    public function redo()
    {

    }
}