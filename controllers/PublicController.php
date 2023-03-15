<?php
use Repositories\UserRepository;
use Repositories\PostsRepository;

class PublicController extends Controller {

    // DISPLAY
    public function displayHome(\Base $f3) {
        $posts = PostsRepository::instance()->find(null, ["order"=>"id DESC"])->castAll();
        $f3->set('posts', $posts);
        echo \Template::instance()->render('../ui/home.html');
    }

    public function display_profil(\Base $f3) {
        /*$user = UserRepository::instance()->load(["username = ?", $f3->PARAMS['username']], ["order"=>"id DESC"]);
        $posts = PostsRepository::instance()->find(["username = ?", $f3->PARAMS['username']], ["order"=>"id DESC"])->castAll();
        $f3->set('user', $user);
        $f3->set('posts', $posts);*/

    }

    public function display_gallery(\Base $f3) {
        /*$posts = PostsRepository::instance()->find(["username = ?", $f3->PARAMS['username']], ["order"=>"id DESC"])->castAll();
        $f3->set('posts', $posts);*/
    }

    public function display_post(\Base $f3) {
        $picture = PostsRepository::instance()->getById($f3->PARAMS['post']);
        $f3->set('post', $picture);
        echo \Template::instance()->render('../ui/picture.html');

    }

}
