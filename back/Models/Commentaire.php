<?php

namespace Models;

use DB\CortexCollection;
use DB\SQL\Schema;

class Commentaire extends Model
{

    public function __construct(){
        parent::__construct();
    }

    protected $table = 'commentaire';
    protected $fieldConf = [
        'user' => [
            'belongs-to-one' => User::class,
            'nullable' => false,
        ],
        'destinataire' => [
            'belongs-to-one' => User::class,
            'nullable' => false,
        ],
        'post' => [
            'belongs-to-one' =>  Posts::class,
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

    public function cast($obj = NULL, $rel_depths = 1): array
    {
        $cast = parent::cast($obj, $rel_depths);

        $cast['TotalHT'] = $this->lignes->TotalHT;
        $cast['TotalTVA'] = $this->lignes->TotalTVA;
        $cast['TotalTTC'] = $this->lignes->TotalTTC;
        $cast['TotalRemise'] = $this->lignes->TotalRemise;
        $cast['DetailTVA'] = $this->lignes->DetailTVA;

        $cast['TotalReglements'] = $this->reglements->Total;
        return $cast;
    }

}
