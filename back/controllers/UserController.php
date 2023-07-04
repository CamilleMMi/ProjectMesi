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
        if(!($f3->POST['photo_profile'] == null)) {
            $userfound = $user->getById($userid);
            $pfp = $userfound->photo_profile;
            if($pfp) {
                unlink($pfp);
            }
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

        if(array_keys($files)[0] != null) {
            $user->updatePhotoProfile($userid, array_keys($files)[0]);
        }

        $f3->reroute('/');
    }


    public function display(\Base $f3) {
        $user = UserRepository::instance()->getById($f3->USER->_id);
        $f3->set('user', $user);
        $f3->set('CONTENT', '../ui/public/account.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }

    public function displayGallery(\Base $f3) {
        $posts = PostsRepository::instance()->find(["user = ?", $f3->USER->_id],["order"=>"post_date DESC"]);
        $f3->set('posts', $posts);
        $f3->set('CONTENT', '../ui/public/gallery.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }
}
