<?php

use voku\helper\HtmlMin;
use voku\twig\MinifyHtmlExtension;

class Controller {

    public function beforeRoute() {
        global $f3;
        $userid = $f3->SESSION['userid'];

        if ($userid) {
            $userRepo = new \Repositories\UserRepository();
            $f3->USER = $userRepo->load(['_id = ?', $userid]);
        }
        else {
            $f3->USER = [];
        }

        //Check si
        //$this->authorize(); //CEST AVEC ACCESS!!
    }

    /**
     * Echoing json with correct headers
     */
    public function json_echo($data): void {
        header('Content-type: application/json');
        echo json_encode($data);
    }

}
