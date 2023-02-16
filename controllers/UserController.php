<?php
use Repositories\UserRepository;
use Repositories\PicturesRepository;

class UserController extends Controller {

    //update profile
    public function update(\Base $f3) {
        $userRepo = new UserRepository();
        $userRepo->edit($f3->SESSION['userid'], $f3->POST);


        /*$filename = array_keys($files)[0];
        $user->copyfrom([
            'photo_profile' => $filename
        ]);*/

        $f3->reroute('/');
    }

    public function upload_post(\Base $f3) {
        $postRepo = New PicturesRepository;
        $params = $f3->POST;

        $post = $postRepo->add(
            [
                'user' => $f3->SESSION['userid'],
                'title' => $params['title'],
                'description' => $params['description']
            ]
        );

        $post->save();

        $f3->reroute('/post/' . $post->_id );
    }

    public function create_post(\Base $f3) {
        echo \Template::instance()->render('../ui/creer_post.html');
    }

    public function display(\Base $f3) {
        $user = UserRepository::instance()->getById($f3->SESSION['userid']);
        $f3->set('user', $user);
        echo \Template::instance()->render('../ui/account.html');
    }
}
