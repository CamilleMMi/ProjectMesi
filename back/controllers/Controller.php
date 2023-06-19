<?php

use voku\helper\HtmlMin;
use voku\twig\MinifyHtmlExtension;

class Controller {

    public function beforeRoute() {
        global $f3;
        $userid = $f3->SESSION['userid'];

        if ($userid) {
            $userRepo = new \Repositories\UserRepository();
            $f3->USER = $userRepo->load(['_id = ?', $userid]);
        }
        else {
            $f3->USER = [];
        }

        $this->authorize(); //access plugin
    }

    /**
     * Middleware check with F3-access
     */
    private function authorize()
    {
        global $f3;
        $access = Access::instance();
        $level = $f3->USER ? $f3->USER['role'] : 'visitor';
        $access->authorize($level, function ($route, $subject) use ($f3) {
            $f3->reroute('/');
        });
    }

    /**
     * Echoing json with correct headers
     */
    public function json_echo($data): void {
        header('Content-type: application/json');
        echo json_encode($data);
    }

        /**
     * Template rendering
     */
    public function twig_render($template, $variables = []): string {
        global $f3;
        $f3->FLASH=Flash::instance()->getMessages();
        $loader = new \Twig\Loader\FilesystemLoader('ui/views');
        $twig = new \Twig\Environment($loader, $f3->TWIG);

        //Adding extension for minimify html
        $minifier = new HtmlMin();
        $twig->addExtension(new MinifyHtmlExtension($minifier, true));
        $twig->addExtension(new \Twig\Extension\DebugExtension());

        $template = $twig->load($template);
        return $template->render(array_merge($variables, ['base' => $f3]));
    }

}

