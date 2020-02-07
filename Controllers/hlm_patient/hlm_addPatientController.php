<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$patient = new Hlm_patient();
if (isset($_POST['addPatient'])) {
    $lastName = $_POST['lastnamePatient'];
    $firstName = $_POST['firstnamePatient'];
    $birthdate = $_POST['birthdatePatient'];
    $phone = $_POST['phonePatient'];
    $mail = $_POST['mailPatient'];
    //Hydratation
    $patient->setFirstname($firstName);
    $patient->setLastname($lastName);
    $patient->setBirthdate($birthdate);
    $patient->setPhone($phone);
    $patient->setMail($mail);
    $patient->addPatient();
}
