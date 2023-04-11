<?php
//phpinfo();

date_default_timezone_set('Europe/Paris');

// Kickstart the framework
require 'vendor/autoload.php';
$f3 = \Base::instance();


// Load configuration
$f3->config('config.ini');
$f3->config('routes.ini');
@$f3->config('dev.ini');

$f3->set('LOGS',"./logs");

if (!file_exists('logs')) {
    mkdir('logs', 0777, true);
}
@ini_set('error_log',$f3->LOGS.'/error.log');

$f3->run();
