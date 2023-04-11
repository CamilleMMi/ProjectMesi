<?php
use Repositories\UserRepository;

class AdminController extends Controller {

    //admin can change everyone's status
    public function updateStatut(\Base $f3) {
        $userRepo = new UserRepository();
        $userid = $userRepo->getById($f3->PARAMS['user'])[0];
        $userRepo->updateStatut($userid);

        $f3->reroute('/dashboard');
    }

    // DISPLAY
    public function dashboard(\Base $f3) {
        if($f3->USER->role == 'admin') {
            echo \Template::instance()->render('../ui/admin/admin.html');
        }
        else {
            echo "Vous n'avez pas l'autorisation d'accéder au tableau de bord des admins!!";
        }
    }
}
