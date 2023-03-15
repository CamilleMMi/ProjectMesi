<?php
use Repositories\UserRepository;
use Repositories\PostsRepository;

class UserController extends Controller {

    //update profile
    public function update(\Base $f3) {
        $user = new UserRepository;
        $userid = $f3->SESSION['userid'];
        $user->edit($userid, $f3->POST);

        //=== UPLOADING FILES ===
        $web = \Web::instance();

        // Create and setting default upload folder
        $folder = 'uploads/' . $userid . '/';
        if(!is_dir($folder)){ mkdir($folder); }
        $f3->set('UPLOADS', $folder);

        //unlink previous pfp
        $userfound = $user->getById($userid);
        $pfp = $userfound->photo_profile;
        if($pfp) {
            unlink($pfp);
        }

        $files = $web->receive(
            function($file) use ($user, $folder) {
                return true;
            },
            true,
            function($filename) {
                return uniqid() . "_" . $filename;
            }
        );

        $user->updatePhotoProfile($userid, array_keys($files)[0]);

        /*$filename = array_keys($files)[0];
        $user->copyfrom([
            'photo_profile' => $filename
        ]);*/

        $f3->reroute('/');
    }


    public function display(\Base $f3) {
        $user = UserRepository::instance()->getById($f3->SESSION['userid']);
        $f3->set('user', $user);
        echo \Template::instance()->render('../ui/account.html');
    }

    public function displayGallery(\Base $f3) {
        $posts = PostsRepository::instance()->find(["user = ?", $f3->SESSION['userid']],["order"=>"post_date DESC"]);
        $f3->set('posts', $posts);
        echo \Template::instance()->render('../ui/gallery.html');
    }
}
