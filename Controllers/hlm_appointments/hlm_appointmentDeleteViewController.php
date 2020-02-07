<?php

class Hlm_viewDeleteAppointmentController
{
    //Attributs
    private $_title;
    private $_contents;

    //fonction d'appel
    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getContents()
    {
        return $this->_contents;
    }

    public function setContents($contents)
    {
        $this->_contents = $contents;
    }

    //Constructeur
    public function __construct($title,$contents)
    {
        $this->setTitle($title);
        $this->setContents($contents);
    }
}

?>