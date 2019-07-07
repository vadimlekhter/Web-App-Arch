<?php


class Client
{
    protected $operationsStorage = [];
    protected $currentOperation;
    protected $historyItem;
    protected $history;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->history = new History();
    }


    public function makeOperation($historyItem)
    {
        $command = new HistoryCommand($this->history, $historyItem, 'add');
        $command->execute();
        $this->operationsStorage [] = $command;
        $this->currentOperation++;
    }

    public function undo($level)
    {
        for ($i = 1; $i <= $level; $i++) {
            if ($this->currentOperation > 0) {
                $this->operationsStorage[--$this->currentOperation]->unexecute();
            }
        }
    }

    public function redo($level)
    {
        for ($i = 1; $i <= $level; $i++) {
            if ($this->currentOperation < count($this->operationsStorage)) {
                $this->operationsStorage[$this->currentOperation++]->execute();
            }
        }
    }
}