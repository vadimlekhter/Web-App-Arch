<?php


class History
{
    /**
     * @var array
     */
    protected $historyStorage = [];

    /**
     * @param string $historyItem
     * @param string $operation
     */
    public function changeHistory(string $historyItem, string $operation): void
    {
        switch ($operation) {
            case 'add':
                array_push($this->historyStorage, $historyItem);
                break;
            case 'remove':
                array_pop($this->historyStorage);
                break;
            default:
                print_r('Wrong action');
                exit();
        }
        var_dump($this->historyStorage);
    }
}