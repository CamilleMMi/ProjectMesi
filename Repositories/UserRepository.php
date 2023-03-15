<?php

namespace Repositories;
// Child class
class UserRepository extends Repository {
    protected $modelClass = '\Models\User';

    //change user's statut to the opposite
    public function updateStatut($id) {
        $this->exec("UPDATE user SET compte_actif = NOT compte_actif WHERE id = ? ", $id);
    }

    public function updatePhotoProfile($userid, $newname) {
        $this->exec("UPDATE user SET photo_profile = ? WHERE id = ?", [$newname, $userid]);
    }
}
