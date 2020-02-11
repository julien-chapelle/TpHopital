<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
$appointment = new Hlm_appointements();

if (isset($_POST['deleteAppointment'])) {

    $currentId = intval($_POST['idAppointmentDelete']);
    //Hydratation
    $appointment->setId($currentId);
    $deleteAppointment = $appointment->deleteAppointment();
}
