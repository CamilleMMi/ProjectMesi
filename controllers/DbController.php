<?php

class DbController extends Controller {

    public function db_setup(\Base $f3) {
        $model_files = scandir('./Models');
        foreach($model_files as $file){
            if(!in_array(
                $file,
                [
                    '.',
                    '..',
                    'Model.php'
                ]
            )){
                $modelname = explode('.', $file)[0];
                $classname = "\\Models\\" . $modelname;
                //$classname::setdown();
                $classname::setup();
            }
        }

        echo "<p>DB setup completed.</p>";
    }

    public function db_populate(\Base $f3) {
        $faker = Faker\Factory::create('fr_FR');
        $faker->seed(11794591);

        //repositories
        $UserRepository = new \Repositories\UserRepository();
        $password = $f3->GET['password'] ?: 'admin_mesi';
        $UserRepository->add([
            'email' => 'admin@projet-mesi.fr',
            'password' => $password,
            'role' => 'admin'
        ]);

        //users
        $users = array_map(
            function($e) use ($faker, $UserRepository, $password){
                return $UserRepository->add([
                    'email' => $faker->email,
                    'password' => $password,
                ]);
            },
            array_fill(0, 49, 0)
        );

        echo "<p>DB populate completed.</p>";
    }


}
