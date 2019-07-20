<?php


class Db
{
    private $data = [];

    /**
     * Db constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function findOne(int $id)
    {
        $temp = $this->data[$id];
        if (isset($temp)) {
            return $temp;
        } else {
            return null;
        }
    }
}