<?php

class Hlm_patient extends Hlm_database
{

    //Attributs
    private $_id;
    private $_lastname;
    private $_firstname;
    private $_birthdate;
    private $_phone;
    private $_mail;

    //Méthodes d'appels Get/set
    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getLastname()
    {
        return $this->_lastname;
    }

    public function setLastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    public function getFirstname()
    {
        return $this->_firstname;
    }

    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    public function getBirthdate()
    {
        return $this->_birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }

    public function getPhone()
    {
        return $this->_phone;
    }

    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    public function getMail()
    {
        return $this->_mail;
    }

    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    //Constructeur
    public function __construct()
    {
        parent::__construct();
    }

    public function addPatient()
    {
        $addPatientQuery = "INSERT INTO `hlm_patients`(`lastname`,`firstname`,`birthdate`,`phone`,`mail`) 
        VALUES (:lastname,:firstname,:birthdate,:phone,:mail)";

        $addPatientResult = $this->db->prepare($addPatientQuery);
        $addPatientResult->bindValue(':lastname', $this->getLastname(), PDO::PARAM_STR);
        $addPatientResult->bindValue(':firstname', $this->getFirstname(), PDO::PARAM_STR);
        $addPatientResult->bindValue(':birthdate', $this->getBirthdate(), PDO::PARAM_STR);
        $addPatientResult->bindValue(':phone', $this->getPhone(), PDO::PARAM_STR);
        $addPatientResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        if ($addPatientResult->execute()) {
            echo 'Le patient a été ajouté';
        } else {
            echo 'Erreur';
        }
    }

    public function listPatient()
    {
        $listPatientQuery = "SELECT * FROM `hlm_patients`";

        $listPatientResult = $this->db->query($listPatientQuery);
        $dataListPatient = $listPatientResult->fetchAll();
        return $dataListPatient;
    }

    public function detailPatient()
    {
        $detailPatientQuery = "SELECT `hlm_patients`.`id`,`hlm_patients`.`lastname`,`hlm_patients`.`firstname`,`hlm_patients`.`birthdate`,`hlm_patients`.`phone`,`hlm_patients`.`mail` 
        FROM `hlm_patients`
        WHERE `id` = :currentId";

        $detailPatientResult = $this->db->prepare($detailPatientQuery);
        $detailPatientResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($detailPatientResult->execute()) {
            $detailPatient = $detailPatientResult->fetchAll(PDO::FETCH_ASSOC);
            return $detailPatient;
        };
    }

    public function editPatient()
    {
        $editPatientQuery = "UPDATE hlm_patients
        SET lastname = :lastname,firstname = :firstname,birthdate = :birthdate,phone = :phone,mail = :mail
        WHERE id = :currentId";

        $editPatientResult = $this->db->prepare($editPatientQuery);
        $editPatientResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editPatientResult->bindValue(':lastname', $this->getLastname(), PDO::PARAM_STR);
        $editPatientResult->bindValue(':firstname', $this->getFirstname(), PDO::PARAM_STR);
        $editPatientResult->bindValue(':birthdate', $this->getBirthdate(), PDO::PARAM_STR);
        $editPatientResult->bindValue(':phone', $this->getPhone(), PDO::PARAM_STR);
        $editPatientResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        if ($editPatientResult->execute()) {
            echo 'Le patient a été modifié';
        } else {
            echo 'Erreur';
        }
    }
}
