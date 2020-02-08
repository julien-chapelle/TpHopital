<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
$appointment = new Hlm_appointements();
if (isset($_POST['addAppointment'])) {
    $dateAppointment = $_POST['dateAppointment'];
    $hourAppointment = $_POST['hourAppointment'];
    $idPatientAppointment = intval($_POST['idPatient']);

    //Hydratation
    $appointment->setDateHour($dateAppointment . ' ' . $hourAppointment . ':00');
    $appointment->setIdPatients($idPatientAppointment);

    var_dump($appointment->getDateHour());
    var_dump($appointment->getIdPatients());

}

// $appointment->setDateHour(strftime('%Y-%m-%d %H:%M:%S'($dateAppointment + $hourAppointment)));
// $appointment->setDateHour(strtotime($dateAppointment . ' ' . $hourAppointment . ':00'));
