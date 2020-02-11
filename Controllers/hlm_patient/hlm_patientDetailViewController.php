<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$patient = new Hlm_patient();
if (isset($_GET['detailPatient'])) {

    $currentId = intval($_GET['detailPatient']);
    //Hydratation
    $patient->setId($currentId);
    $detailPatient = $patient->detailPatient();
}
