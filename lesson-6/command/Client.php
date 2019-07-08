<?php


/**
 * Class Client
 */
class Client
{
    /**
     * @var array
     */
    protected $operationsStorage = [];
    /**
     * @var int
     */
    protected $currentOperation;
    /**
     * @var string
     */
    protected $historyItem;
    /**
     * @var History
     */
    protected $history;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->history = new History();
    }


    /**
     * @param string $historyItem
     */
    public function makeOperation(string $historyItem): void
    {
        $command = new HistoryCommand($this->history, $historyItem, 'add');
        $command->execute();
        $this->operationsStorage [] = $command;
        $this->currentOperation++;
    }

    /**
     * @param int $level
     */
    public function undo(int $level): void
    {
        for ($i = 1; $i <= $level; $i++) {
            if ($this->currentOperation > 0) {
                $this->operationsStorage[--$this->currentOperation]->unexecute();
            }
        }
    }

    /**
     * @param int $level
     */
    public function redo(int $level): void
    {
        for ($i = 1; $i <= $level; $i++) {
            if ($this->currentOperation < count($this->operationsStorage)) {
                $this->operationsStorage[$this->currentOperation++]->execute();
            }
        }
    }
}