<?php

namespace Models;

use DB\SQL\Schema;
use Repositories\DocumentRepository;

class Pictures extends Model
{

    public function __construct(){
        parent::__construct();
    }

    protected $table = 'pictures';
    protected $fieldConf = [
        'user' => [
            'belongs-to-one' => 'Models\User',
            'nullable' => false,
        ],
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
