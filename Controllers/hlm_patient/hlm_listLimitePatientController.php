<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$countPatient = new Hlm_patient();
$countPatientResult = $countPatient->countPatient();

$patient = new Hlm_patient();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $limite = 5;
    $pageCount = ceil(intval($countPatientResult[0]['countId']) / $limite);
    $debut = ($page - 1) * $limite;
    $listLimitePatient = $patient->listLimitePatient($limite, $debut);
};

if (isset($_GET['page']) && $_GET['page'] <= 0 || isset($_GET['page']) && $_GET['page'] > $pageCount) {
    header('Location: http://hopitallamanu/index.php?list=patient&page=1');
} else {
    '';
};
?>
