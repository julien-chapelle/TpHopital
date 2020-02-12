<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
require_once('Models/hlm_patientModel.php');
$appointment = new Hlm_appointements();

if (isset($_POST['deletePatient'])) {

    $currentId = intval($_POST['idPatientDelete']);
    //Hydratation
    $appointment->setId($currentId);
    $deleteAllAppointment = $appointment->deleteAllPatientAppointment();
}

$patient = new Hlm_patient();

if (isset($_POST['deletePatient'])) {

    $currentId = intval($_POST['idPatientDelete']);
    //Hydratation
    $patient->setId($currentId);
    $deletePatient = $patient->deletePatient();

    header('refresh: 0');
}

?>