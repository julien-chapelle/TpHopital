<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$patient = new Hlm_patient();
$page = $_GET['page'];
$limite = 5;
$debut = ($page - 1) * $limite;
$listLimitePatient = $patient->listLimitePatient($limite,$debut);

?>
