<?php

namespace Library;

use Comment\CommentManager;
class User implements Users
{
    private int $id;
    private String $name;
    private String $lastname;
    private String $firstname;
    private String $pwd;

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return void
     */
    public function postComment(Array $data, CommentManager $comment): void
    {
        // TODO: Implement postComment() method.
        $comment->create($data);
    }

    /**
     * @param $id
     * @return void
     */
    public function deleteComment($id)
    {
        // TODO: Implement deleteComment() method.
    }

    /**
     * @param $id
     * @return void
     */
    public function likePost($id)
    {
        // TODO: Implement likePost() method.
    }

    /**
     * @param $id
     * @return void
     */
    public function likeComment($id)
    {
        // TODO: Implement likeComment() method.
    }

    /**
     * @param $id
     * @return void
     */
    public function sharePost($id)
    {
        // TODO: Implement sharePost() method.
    }

    /**
     * @param $id
     * @return void
     */
    public function read($id)
    {
        // TODO: Implement read() method.
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}