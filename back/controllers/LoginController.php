<?php
use Repositories\UserRepository;

class LoginController extends Controller {

    public function login(\Base $f3) {
        $userRepo = new UserRepository;
        $user = $userRepo->load(['email = ? AND compte_actif = 1', $f3->POST['email']]);

        // Check out if the user wrote the right password
        if (!(password_verify($f3->POST['password'], $user->password))) {
            $f3->reroute('/');
            echo "<p style='color: red'>mdp ou mail pas bon</p>";
        }
        else {
            $f3->SESSION['userid'] = $user->_id;
            $f3->reroute('/home');
        }
    }

    public function register(\Base $f3) {
        $user = UserRepository::instance()->add($f3->POST);

        //=== UPLOADING FILES ===
        $web = \Web::instance();

        // Create and setting default upload folder
        $folder = 'uploads/' . $user->_id . '/';
        if(!is_dir($folder)){ mkdir($folder); }
        $f3->set('UPLOADS', $folder);

        $files = $web->receive(
            function($file) use ($user, $folder) {
                return true;
            },
            true,
            function($filename) {
                return uniqid() . "_" . $filename;
            }
        );

        $user->copyfrom([
            'photo_profile' => array_keys($files)[0]
        ]);

        $user->save();

        $f3->reroute('/');
    }

    public function logout(\Base $f3) {
        $f3->clear('SESSION');
        $f3->clear('CACHE');
        session_start();
        session_destroy();
        session_commit();
        $f3->reroute('/');
    }

    // DISPLAY
    public function displayLogin(\Base $f3) {
        $f3->set('CONTENT', '../ui/login.html');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }

    public function displayInscription(\Base $f3) {
        $f3->set('CONTENT', '../ui/register.html');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }
}
