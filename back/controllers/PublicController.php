<?php
use Repositories\UserRepository;
use Repositories\PostsRepository;

class PublicController extends Controller {

    // DISPLAY
    public function displayHome(\Base $f3) {
        $posts = PostsRepository::instance()->find(null, ["order"=>"id DESC"])->castAll();

        $f3->set('posts', $posts);
        $f3->set('CONTENT', '../ui/public/home.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }

    public function display_profil(\Base $f3) {
        $username = $f3->PARAMS['username'];
        $user = UserRepository::instance()->load("pseudo = '$username'")->cast();
        $posts = PostsRepository::instance()->find(['user = ?', $user['_id']]);
        $f3->set('user', $user);
        $f3->set('posts', $posts?$posts->castAll():[]);
        $f3->set('CONTENT', '../ui/public/user_profile.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');

    }

    public function display_gallery(\Base $f3) {
        /*$posts = PostsRepository::instance()->find(["username = ?", $f3->PARAMS['username']], ["order"=>"id DESC"])->castAll();
        $f3->set('posts', $posts);*/
    }

    public function display_post(\Base $f3) {
        $picture = PostsRepository::instance()->getById($f3->PARAMS['post']);
        $f3->set('post', $picture);
        $f3->set('CONTENT', '../ui/public/picture.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');

    }

}
