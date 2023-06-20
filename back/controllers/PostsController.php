<?php
use Repositories\UserRepository;
use Repositories\PostsRepository;
use Repositories\CommentaireRepository;

class PostsController extends Controller {

    public function upload_post(\Base $f3) {
        $postRepo = new PostsRepository;
        $params = $f3->POST;
        $userid = $f3->SESSION['userid'];

        //=== UPLOADING FILES ===
        $web = \Web::instance();

        // Create and setting default upload folder
        $folder = 'uploads/' . $userid . '/posts/';
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

        $post = $postRepo->add(
            [
                'user' => $f3->SESSION['userid'],
                'title' => $params['title'],
                'description' => $params['description'],
                'picture' => array_keys($files)[0]
            ]
        );

        $post->save();

        $f3->reroute('/post/' . $post->_id );
    }

    public function update_post(\Base $f3) {
        $post = new PostsRepository;
        $userid = $f3->SESSION['userid'];
        $postid = $f3->PARAMS['post'];

        $post->edit($postid, $f3->POST);

        //=== UPLOADING FILES ===
        $web = \Web::instance();

        // Create and setting default upload folder
        $folder = 'uploads/' . $userid . '/posts/';
        if(!is_dir($folder)){ mkdir($folder); }
        $f3->set('UPLOADS', $folder);

        //unlink previous post's picture
        $postfound = $post->getById($postid);
        $picture = $postfound->picture;
        if($picture) {
            unlink($picture);
        }

        $files = $web->receive(
            function($file) use ($post, $folder) {
                return true;
            },
            true,
            function($filename) {
                    return uniqid() . "_" . $filename;
            }
        );

        $post->updatePostImage($postid, array_keys($files)[0]);

        $f3->reroute('/post/' . $postid);
    }

    public function delete_post(\Base $f3) {
        $post = new PostsRepository;
        $userid = $f3->SESSION['userid'];
        $postid = $f3->PARAMS['post'];

        $post->delete($postid);
        $f3->reroute('/mygallery');
    }

    public function create_post(\Base $f3) {
        $f3->set('CONTENT', '../ui/public/creer_post.html');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }

    public function display(\Base $f3) {
        $picture = PostsRepository::instance()->getById($f3->PARAMS['post'])->cast();
        $comments = CommentaireRepository::instance()->find(['post = ?', $f3->PARAMS['post']], ["order"=>"id DESC"]);
        $f3->set('post', $picture);
        $f3->set('commentaires', $comments?$comments->castAll():[]);
        $f3->set('CONTENT', '../ui/public/picture.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }

    public function edit(\Base $f3) {
        $picture = PostsRepository::instance()->getById($f3->PARAMS['post']);
        $f3->set('post', $picture);
        $f3->set('CONTENT', '../ui/public/edit_post.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }
}

