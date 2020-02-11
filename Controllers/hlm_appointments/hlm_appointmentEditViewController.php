<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
$appointment = new Hlm_appointements();
if (isset($_GET['editAppointment'])) {

    $currentId = intval($_GET['editAppointment']);
    //Hydratation
    $appointment->setId($currentId);
    $detailAppointment = $appointment->detailAppointment();
}

$editAppointment = new Hlm_appointements();
if (isset($_POST['editAppointment'])) {
    $dateAppointment = $_POST['dateAppointment'];
    $hourAppointment = $_POST['hourAppointment'];
    $idPatientAppointment = intval($_POST['idPatient']);
    $currentId = intval($_GET['editAppointment']);
    //Hydratation
    $editAppointment->setDateHour($dateAppointment . ' ' . $hourAppointment . ':00');
    $editAppointment->setIdPatients($idPatientAppointment);
    $editAppointment->setId($currentId);
    $editAppointment->editAppointment();
}

if(isset($_POST['editAppointment'])) {
    header('refresh: 0');
}