<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$patient = new Hlm_patient();

if (isset($_POST['searchSubmit'])) {
    $searchLastName = $_POST['searchLastname'];
    //Hydratation
    $patient->setLastname($searchLastName);
    $searchPatient = $patient->searchPatient();

}
