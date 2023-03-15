<?php

namespace Models;

use DB\SQL\Schema;
use Repositories\DocumentRepository;

class User extends Model
{

    public function __construct(){
        parent::__construct();
    }

    const ROLE = [
        'admin',
        'artist',
        'client',
        'visitor'
    ];

    protected $table = 'user';
    protected $fieldConf = [
        'email' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false,
            'unique' => true,
            'index' => true
        ],
        'password' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'compte_actif' => [
            'type' => Schema::DT_INT,
            'nullable' => false,
            'default' => 1
        ],
        'role' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false,
            'default' => 'visitor'
        ],
        'photo_profile' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => true,
        ]
    ];

    /*
        protected $fieldConf = [
        'nom' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'prenom' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'pseudo' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'email' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false,
            'unique' => true,
            'index' => true
        ],
        'password' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'date_naissance' => [
            'type' => Schema::DT_DATE,
            'nullable' => true,
        ],
        'description' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'link' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'role' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false,
            'default' => 'visitor'
        ],
        'compte_actif' => [
            'type' => Schema::DT_INT,
            'nullable' => false,
            'default' => 1
        ],
        'pdp' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => true,
        ],
        'created_at' => [
            'type' => Schema::DT_TIMESTAMP,
            'default' => Schema::DF_CURRENT_TIMESTAMP,
        ]
    ];
    */

    /**
     * Hashes the password upon setting
     * @param string $value clear password
     * @return string hashed password
     */
    public function set_password(string $password): string{
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * Checks the provided guess against the password
     * @param string $guess value entered by the user
     * @return bool whether or not the password corresponds to the guess
     */
    public function is_password(string $guess): bool{
        return password_verify($guess, $this->password);
    }

    public function set_photo_profile(string $nom): string{
        @unlink($this->photo_profile);
        return $nom;
    }

}
