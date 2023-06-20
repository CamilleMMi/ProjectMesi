<?php
use Repositories\UserRepository;
use Repositories\PostsRepository;
use Repositories\CommentaireRepository;

class CommentaireController extends Controller {

    public function send_comment(\Base $f3)
    {
        $commentaireRepo = new CommentaireRepository;
        $params = $f3->POST;
        $post = PostsRepository::instance()->getById($f3->PARAMS['post']);

        $commentaire = $commentaireRepo->add(
            [
                'user' => $f3->SESSION['userid'],
                'destinataire' => $post->user->_id,
                'post' => $post->_id,
                'body' => $params['body']
            ]
        );
        $commentaire->save();

        $f3->reroute('/post/' . $post['_id'] );
    }

    public function delete_comment(\Base $f3)
    {
        $id_comment = $f3->POST['commentaire_id'];
        CommentaireRepository::instance()->delete($f3->POST['commentaire_id']);
    }

}
