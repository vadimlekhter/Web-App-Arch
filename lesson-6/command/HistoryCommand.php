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
    public function __construct($history, $historyItem)
    {
        $this->history = $history;
        $this->historyItem = $historyItem;
    }


    public function execute()
    {
        $this->history->changeHistory($this->historyItem, 'add');
    }

    public function unexecute()
    {
        $this->history->changeHistory($this->historyItem, 'remove');
    }

}