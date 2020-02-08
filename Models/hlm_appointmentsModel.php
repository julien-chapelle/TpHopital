<?php

class Hlm_appointements extends Hlm_database
{

    //Attributs
    private $_id;
    private $_dateHour;
    private $_idPatients;

    //Méthodes d'appels Get/set
    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getDateHour()
    {
        return $this->_dateHour;
    }

    public function setDateHour($dateHour)
    {
        $this->_dateHour = $dateHour;
    }

    public function getIdPatients()
    {
        return $this->_idPatients;
    }

    public function setIdPatients($idPatients)
    {
        $this->_idPatients = $idPatients;
    }

    //Constructeur
    public function __construct()
    {

        parent::__construct();
    }

    public function addAppointment()
    {
        $addAppointmentQuery = "INSERT INTO `hlm_appointments` (`dateHour`,`idPatients`) 
        VALUES (:dateHour,:idPatients)";

        $addAppointmentResult = $this->db->prepare($addAppointmentQuery);
        $addAppointmentResult->bindValue(':dateHour', $this->getDateHour(), PDO::PARAM_STR);
        $addAppointmentResult->bindValue(':idPatients', $this->getIdPatients(), PDO::PARAM_INT);
        if ($addAppointmentResult->execute()) {
            echo 'Le rendez-vous a été ajouté';
        } else {
            echo 'Erreur';
        }
    }

    public function listAppointment()
    {
        $listAppointmentQuery = "SELECT `hlm_appointments`.`id`,`hlm_appointments`.`dateHour`,`hlm_patients`.`lastname`, `hlm_patients`.`firstname`,`hlm_patients`.`id`
        FROM `hlm_appointments`
        LEFT JOIN `hlm_patients`
        ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients`";

        $listAppointmentResult = $this->db->query($listAppointmentQuery);
        $dataListAppointment = $listAppointmentResult->fetchAll();
        return $dataListAppointment;
    }
}