<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$patient = new Hlm_patient();

$listPatient = $patient->listPatient();

?>
