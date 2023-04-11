<?php
use Repositories\UserRepository;
use Repositories\PostsRepository;

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

    public function create_post(\Base $f3) {
        $f3->set('CONTENT', '../ui/creer_post.html');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }

    public function display(\Base $f3) {
        $picture = PostsRepository::instance()->getById($f3->PARAMS['post']);
        $f3->set('post', $picture);
        $f3->set('CONTENT', '../ui/picture.html');
        //$f3->set('CONTENTJS', 'views/home/home.js');
        echo \Template::instance()->render('../ui/base_template.html', 'text/html');
    }
}

