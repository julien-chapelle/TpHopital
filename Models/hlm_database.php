<?php

class Hlm_database extends
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=hospital2n;charset=utf8', '', 'root');
    }
}

?>