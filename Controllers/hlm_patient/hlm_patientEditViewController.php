<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$patient = new Hlm_patient();
if (isset($_GET['editPatient'])) {

    $currentId = intval($_GET['editPatient']);
    //Hydratation
    $patient->setId($currentId);
    $detailPatient = $patient->detailPatient();
}

$editPatient = new Hlm_patient();
if (isset($_POST['editPatient'])) {
    $lastName = $_POST['lastnamePatient'];
    $firstName = $_POST['firstnamePatient'];
    $birthdate = $_POST['birthdatePatient'];
    $phone = $_POST['phonePatient'];
    $mail = $_POST['mailPatient'];
    $currentId = intval($_GET['editPatient']);
    //Hydratation
    $editPatient->setFirstname($firstName);
    $editPatient->setLastname($lastName);
    $editPatient->setBirthdate($birthdate);
    $editPatient->setPhone($phone);
    $editPatient->setMail($mail);
    $editPatient->setId($currentId);
    $editPatient->editPatient();
}

if(isset($_POST['editPatient'])) {
    header('refresh: 0');
}