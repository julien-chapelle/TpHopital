<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
$arrayError = [];
$appointment = new Hlm_appointements();
if (isset($_GET['editAppointment'])) {

    $currentId = intval($_GET['editAppointment']);
    //Hydratation
    $appointment->setId($currentId);
    $detailAppointment = $appointment->detailAppointment();
}

// ERROR DATE
// $regexDate = '/^[1-2]{1}[0-9]{3}-[0-9]{1}[1-9]{1}-[0-9]{1}[1-9]{1}$/';

// if (isset($_POST['dateAppointment'])) {
//     if (!preg_match($regexDate, $_POST['dateAppointment'])) {
//         $arrayError['dateAppointment'] = 'Veuillez respecter le format "aaaa-mm-jj"';
//     };
//     if (empty($_POST['dateAppointment'])) {
//         $arrayError['dateAppointment'] = 'Veuillez remplir le champ';
//     };
// };
// ERROR HOUR
$regexHour = '/^[0-9]{2}:[0-9]{2}$/';

if (isset($_POST['hourAppointment'])) {
    if (!preg_match($regexHour, $_POST['hourAppointment'])) {
        $arrayError['hourAppointment'] = 'Veuillez respecter le format "00:00"';
    };
    if (empty($_POST['hourAppointment'])) {
        $arrayError['hourAppointment'] = 'Veuillez remplir le champ';
    };
};

$editAppointment = new Hlm_appointements();
if (isset($_POST['editAppointment']) && empty($arrayError)) {
    $dateAppointment = htmlspecialchars($_POST['dateAppointment']);
    $hourAppointment = htmlspecialchars($_POST['hourAppointment']);
    $idPatientAppointment = htmlspecialchars(intval($_POST['idPatient']));
    $currentId = htmlspecialchars(intval($_GET['editAppointment']));
    //Hydratation
    $editAppointment->setDateHour($dateAppointment . ' ' . $hourAppointment . ':00');
    $editAppointment->setIdPatients($idPatientAppointment);
    $editAppointment->setId($currentId);
    $editAppointment->editAppointment();

    header('refresh:2;url=http://hopitallamanu/index.php?list=appointment');
}