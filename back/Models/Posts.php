<?php

namespace Models;

use DB\SQL\Schema;

class Posts extends Model
{

    public function __construct(){
        parent::__construct();
    }

    protected $table = 'posts';
    protected $fieldConf = [
        'user' => [
            'belongs-to-one' => User::class,
            'nullable' => false,
        ],
        /*'favoris' => [
            'has-many' => 'Models\User'
        ],*/
        'title' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false
        ],
        'description' => [
            'type' => Schema::DT_TEXT,
            'nullable' => true
        ],
        'picture' => [
            'type' => Schema::DT_TEXT,
            'nullable' => true
        ],
        'like_amount' => [
            'type' => Schema::DT_INT,
            'nullable' => false,
            'default' => 0
        ],
        'view_amount' => [
            'type' => Schema::DT_VARCHAR256,
            'nullable' => false,
            'default' => 0
        ],
        'actif' => [
            'type' => Schema::DT_INT,
            'nullable' => false,
            'default' => 1
        ],
        'post_date' => [
            'type' => Schema::DT_TIMESTAMP,
            'default' => Schema::DF_CURRENT_TIMESTAMP,
        ]
    ];

}
