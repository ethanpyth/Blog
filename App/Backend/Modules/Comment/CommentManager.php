<?php

namespace Comment;

use PDO;

class CommentManager extends \Library\Manager
{

    /**
     * @param int $id
     * @param array $data
     * @return void
     */
    public function update(int $id, ARRAY $data): void
    {
        // TODO: Implement update() method.
        $q = $this->db->prepare('UPDATE comment SET content = :content, author = :author WHERE id = :id');
        $q->bindValue(':content', $data['content'], PDO::PARAM_STR);
        $q->bindValue(':author', $data['idAuthor'], PDO::PARAM_INT);
        $q->bindValue(':id', $data['id'], PDO::PARAM_STR);

        $q->execute();
    }

    /**
     * @param int $id
     * @return void
     */
    public function read(int $id): void
    {
        // TODO: Implement read() method.

    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
        $q = $this->db->exec('DELETE FROM comments WHERE id = ' . $id);
    }

    /**
     * @param array $data
     * @return void
     */
    public function create(array $data): void
    {
        // TODO: Implement create() method.
        $q = $this->db->prepare('INSERT INTO comments SET author = :idAuthor, content = :content, billet = :idBillet');
        $q->bindValue(':idAuthor', $data['idAuthor'], PDO::PARAM_INT);
        $q->bindValue(':content', $data['content'], PDO::PARAM_STR);
        $q->bindValue(':idBillet', $data['idBillet'], PDO::PARAM_INT);
    }
}