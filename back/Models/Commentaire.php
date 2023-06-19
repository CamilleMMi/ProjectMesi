<?php

namespace Models;

use DB\SQL\Schema;

class Commentaire extends Model
{

    public function __construct(){
        parent::__construct();
    }

    protected $table = 'commentaire';
    protected $fieldConf = [
        'user' => [
            'belongs-to-one' => 'Models\User',
            'nullable' => false,
        ],
        'destinataire' => [
            'belongs-to-one' => 'Models\User',
            'nullable' => false,
        ],
        'post' => [
            'belongs-to-one' => 'Models\Posts',
            'nullable' => false,
        ],
        'body' => [
            'type' => Schema::DT_TEXT,
            'nullable' => true
        ],
        'date' => [
            'type' => Schema::DT_TIMESTAMP,
            'default' => Schema::DF_CURRENT_TIMESTAMP,
        ],
        'actif' => [
            'type' => Schema::DT_INT,
            'nullable' => false,
            'default' => 1
        ]
    ];

}
