<?php

namespace Library;

use PDO;

abstract class Manager
{
    protected PDO $db;

    public function __construct($db)
    {
        $this->setDb();
    }

    /**
     * @param mixed $db
     */
    public function setDb(PDO $db): void
    {
        $this->db = $db;
    }

    abstract public function update(int $id);
    abstract public function read(int $id);
    abstract public function delete(int $id);
    abstract public function create(Array $data);
}