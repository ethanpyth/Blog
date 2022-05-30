<?php

class BilletManager extends \Library\Manager
{

    /**
     * @param int $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data): void
    {
        // TODO: Implement update() method.
        $q = $this->db->prepare(
            'UPDATE billets SET content = :content, title = :title, dateModif = :dateModif WHERE id = :id'
        );
        $q->bindValue(':content', $data['content']);
        $q->bindValue(':title', $data['title']);
        $q->bindValue(':dateModif', $data['dateModif']);
        $q->bindValue(':id', $data['id']);
        $q->execute();
    }

    /**
     * @param int $id
     * @return void
     */
    public function read(int $id): void
    {
        // TODO: Implement read() method.
        $q = $this->db->prepare(
            'SELECT author, content, title, dateCreation, dateModif FROM billets WHERE id = :id'
        );
        $q->bindValue(':id', $id, PDO::PARAM_INT);
        $q->execute();
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
        $q = $this->db->exec('DELETE FROM billets WHERE id = ' . $id);
    }

    /**
     * @param array $data
     * @return void
     */
    public function create(array $data): void
    {
        // TODO: Implement create() method.
        $q = $this->db->prepare(
            'INSERT INTO billets SET author = :author, title = :title, dateModif = NOW(), content = :content'
        );
        $q->bindValue(':title', $data['title']);
        $q->bindValue(':author', $data['author']);
        $q->bindValue('content', $data['content']);
    }
}