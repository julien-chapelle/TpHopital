<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
$appointment = new Hlm_appointements();
if (isset($_POST['addAppointment'])) {
    $dateAppointment = $_POST['dateAppointment'];
    $hourAppointment = $_POST['hourAppointment'];
    $idPatientAppointment = intval($_GET['addAppointment']);

    //Hydratation
    $appointment->setDateHour($dateAppointment . ' ' . $hourAppointment);
    $appointment->setIdPatients($idPatientAppointment);
    $appointment->addAppointment();

    header('Location: http://hopitallamanu/index.php?list=appointment');
}
