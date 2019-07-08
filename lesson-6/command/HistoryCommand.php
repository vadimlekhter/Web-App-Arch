<?php


class HistoryCommand implements ICommand
{
    /**
     * @var History
     */
    protected $history;
    /**
     * @var string
     */
    protected $historyItem;
    /**
     * @var string
     */
    protected $operation;

    /**
     * HistoryCommand constructor.
     * @param History $history
     * @param string $historyItem
     * @param string $operation
     */
    public function __construct($history, $historyItem, $operation)
    {
        $this->history = $history;
        $this->historyItem = $historyItem;
        $this->operation = $operation;
    }


    /**
     * @return void
     */
    public function execute(): void
    {
        $this->history->changeHistory($this->historyItem, $this->operation);
    }

    /**
     * @return void
     */
    public function unexecute(): void
    {
        $this->history->changeHistory($this->historyItem, $this->undo());
    }

    /**
     * @return string
     */
    protected function undo(): string
    {
        return 'remove';
    }

}