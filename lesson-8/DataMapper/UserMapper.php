<?php


class UserMapper
{
    private $db;

    /**
     * UserMapper constructor.
     * @param Db $db
     */
    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function getItem($id): User
    {
        $data = $this->db->findOne($id);
        if ($data === null) {
            exit("Запись c id = $id не найдена");
        }
        return $this->setUser($data);
    }

    private function setUser(array $data): User
    {
        $user = new User();
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        return $user;
    }

}