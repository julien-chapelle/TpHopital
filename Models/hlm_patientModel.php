<?php

class Hlm_patient
{

    //Attributs
    private $_lastname;
    private $_firstname;
    private $_birthday;
    private $_phone;
    private $_mail;

    //Méthodes d'appels Get/set
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

    public function getBirthday()
    {
        return $this->_birthday;
    }

    public function setBirthday($birthday)
    {
        $this->_birthday = $birthday;
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
    public function __construct($lastname,$firstname,$birthday,$phone,$mail)
    {
        
        $this->setLastname($lastname);
        $this->setFirstname($firstname);
        $this->setBirthday($birthday);
        $this->setPhone($phone);
        $this->setMail($mail);

    }

}
