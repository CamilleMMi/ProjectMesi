<?php
use Repositories\UserRepository;
use Repositories\PicturesRepository;

class PicturesController extends Controller {

    public function display(\Base $f3) {
        $picture = PicturesRepository::instance()->getById($f3->PARAMS['picture']);
        $f3->set('post', $picture);
        echo \Template::instance()->render('../ui/picture.html');
    }
}

