<?php

class Hlm_patientController
{
    
    public function index()
    {

    }

    public function details()
    {

    }

    public function Create()
    {

    }

    public function Edit()
    {

    }

    public function Delete()
    {

    }

    public function __construct()
    {
        $pass = '';
        $user = 'root';
        try {
            $data = new PDO('mysql:host=127.0.0.1;dbname=hospital2n;charset=utf8', $user, $pass);
            $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $connectErr = 'Connexion échouée : ' . $e->getMessage();
        };
    }


}

?>