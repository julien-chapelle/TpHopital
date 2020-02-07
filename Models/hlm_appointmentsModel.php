<?php

class Hlm_appointements
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
    public function __construct($id,$dateHour,$idPatients)
    {
        
        $this->setId($id);
        $this->setDateHour($dateHour);
        $this->setIdPatients($idPatients);

    }

}
