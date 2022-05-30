<?php

namespace Comment;

class CommentManager extends \Library\Manager
{

    /**
     * @param int $id
     * @return mixed
     */
    public function update(int $id)
    {
        // TODO: Implement update() method.
        $q = $this->db->prepare('UPDATE comment SET content = :content, author = :author WHERE id = :id');
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function read(int $id)
    {
        // TODO: Implement read() method.
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        // TODO: Implement create() method.
    }
}