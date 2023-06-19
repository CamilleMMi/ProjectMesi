<?php

namespace Repositories;
// Child class
class CommentaireRepository extends Repository {
    protected $modelClass = '\Models\Commentaire';

    public function getCommentsByPost($id_post)
    {
        return $this->exec(
            "SELECT c.*, p.*, u.pseudo as pseudo
            FROM commentaire c
            INNER JOIN posts p ON c.post = p.id
            INNER JOIN user u ON c.user = u.id
            WHERE p.id = ?", [$id_post]
            );
    }
}
