<?php


class Db
{
    private $data = [];

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }


    public function findOne(int $id)
    {
        $temp = $this->data[$id];
        if (isset($temp)) {
            return $temp;
        } else {
            exit('Нет такого id');
        }
    }
}