<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
require_once('Models/hlm_appointmentsModel.php');
$patient = new Hlm_patient();
if (isset($_GET['detailPatient'])) {

    $currentId = intval($_GET['detailPatient']);
    //Hydratation
    $patient->setId($currentId);
    $detailPatient = $patient->detailPatient();
}

$appointment = new Hlm_appointements();
if (isset($_GET['detailPatient'])) {

    $currentId = intval($_GET['detailPatient']);
    //Hydratation
    $appointment->setId($currentId);
    $detailAppointment = $appointment->detailAppointment();

}
