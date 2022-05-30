<?php

namespace Library;

use Comment\CommentManager;

interface Users
{
    function postComment(Array $data, CommentManager $comment);
    function deleteComment(int $id);
    function likePost(int $id);
    function likeComment(int $id);
    function sharePost(int $id);
    function read(int $id);
}