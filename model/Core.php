<?php

namespace Phppot;

use \Phppot\DataSource;

class Core
{

    private $ds;

    function __construct()
    {
        require_once 'DataSource.php';
        $this->ds = new DataSource();
    }

    public function get_by_lang($table, $lang)
    {
        $result = $this->ds->select("SELECT * FROM " . $table." WHERE language = '".$lang."'");
        return $result ? $result[0] : false;
    }

    public function get_all($table)
    {
        return $this->ds->select('SELECT * FROM ' . $table);
    }
}
