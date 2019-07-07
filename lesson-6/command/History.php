<?php


class History
{
    protected $historyStorage = [];

    public function changeHistory($historyItem, $operation)
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