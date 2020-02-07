<?php

class Hlm_database
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=hospitale2n;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage()); //AFFICHE UN MESSAGE D'ERREUR SI N'EST PAS CONNECTE AU SERVEUR
        }
    }
}
