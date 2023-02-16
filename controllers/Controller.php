<?php

use voku\helper\HtmlMin;
use voku\twig\MinifyHtmlExtension;

class Controller {

    public function beforeRoute() {

    }

    /**
     * Echoing json with correct headers
     */
    public function json_echo($data): void {
        header('Content-type: application/json');
        echo json_encode($data);
    }

}
