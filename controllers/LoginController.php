<?php
use Repositories\UserRepository;

class LoginController extends Controller {

    public function login(\Base $f3) {
        $userRepo = new UserRepository;
        $user = $userRepo->load(['email = ? AND compte_actif = 1', $f3->POST['email']]);

        // Check out if the user wrote the right password
        if (!(password_verify($f3->POST['password'], $user->password))) {
            $f3->reroute('/');
        }
        else {
            $f3->SESSION['userid'] = $user->_id;
            $f3->reroute('/home');
        }
    }

    public function register(\Base $f3) {
        $user = UserRepository::instance()->add($f3->POST);
        $user->save();

        $f3->reroute('/');
    }

    public function logout(\Base $f3) {
        
    }

    // DISPLAY
    public function displayLogin(\Base $f3) {
        echo \Template::instance()->render('../ui/login.html');
    }

    public function displayInscription(\Base $f3) {
        echo \Template::instance()->render('../ui/register.html');
    }

    public function displayHome(\Base $f3) {
        echo \Template::instance()->render('../ui/homepage.html');
    }
}
