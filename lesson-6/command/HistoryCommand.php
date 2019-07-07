<?php


class HistoryCommand implements ICommand
{
protected $history;
protected $historyItem;
protected $operation;

    /**
     * HistoryCommand constructor.
     * @param History $history
     * @param $historyItem
     * @param $operation
     */
    public function __construct($history, $historyItem, $operation)
    {
        $this->history = $history;
        $this->historyItem = $historyItem;
        $this->operation = $operation;
    }


    public function execute()
    {
        $this->history->changeHistory($this->historyItem, $this->operation);
    }

    public function unexecute()
    {
        $this->history->changeHistory($this->historyItem, $this->undo());
    }

    protected function undo () {
        return 'remove';
    }

}