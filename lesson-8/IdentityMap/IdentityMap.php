<?php


class IdentityMap
{
    private $storedData = [];
    private $db;

    /**
     * IdentityMap constructor.
     * @param Db $db
     */
    public function __construct(Db $db)
    {
        $this->db = $db;
    }


    public function getData(int $id)
    {
        if (isset($this->storedData[$id])) {
            echo 'Данные из кэша' . PHP_EOL;
            return $this->storedData[$id];
        } else {
            $data = $this->db->findOne($id);
            $this->storedData [$id] = $data;
            echo 'Данные из БД' . PHP_EOL;
            return $data;
        }
    }
}