<?php

namespace Models;

class Model extends \DB\Cortex
{

    public $db;

    public function __construct()
    {
        global $f3;

        if (!isset($f3->db)) {
            $f3->db = new \DB\SQL(
                $f3->get('MYSQL.dsn'),
                $f3->get('MYSQL.user'),
                $f3->get('MYSQL.password'),
                array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,
                    true,
                    \PDO::MYSQL_ATTR_COMPRESS,
                    true,
                    \PDO::ATTR_PERSISTENT => true
                )
            );
            $f3->db->logging = false;
        }
        $this->db = $f3->db;
        parent::__construct();
    }

    public function getFieldList()
    {
        return $this->fieldConf;
    }
}
