<?php

namespace Phppot;

use \Phppot\DataSource;

class Core
{

    private $ds;

    function __construct()
    {
//        require_once __DIR__ . 'DataSource.php';
        require_once 'DataSource.php';
        $this->ds = new DataSource();
    }

    public function get_by_lang($table, $lang)
    {
        $result = $this->ds->select("SELECT * FROM " . $table." WHERE language = '".$lang."'");
        return $result ? $result[0] : false;
    }

    public function get_all($table, $array)
    {
        $result = $this->ds->select('SELECT * FROM ' . $table);
        return $result ? $result[0] : false;
    }
}
