<?php

namespace Repositories;
// Child class
class PostsRepository extends Repository {
    protected $modelClass = '\Models\Posts';

    public function getAllPicturesByUserId($userid) {
        return $this->load("user = ?", [$userid]);
    }

    public function getByIdAndUsername($postid, $username) {
        return $this->exec("SELECT p.*, u.*
                            FROM posts p INNER JOIN user u
                            ON p.user = u.id
                            WHERE u.username = ? AND p.id = ?", [$username, $postid]);
    }
}
