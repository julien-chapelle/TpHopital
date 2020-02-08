<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_appointmentsModel.php');
$appointment = new Hlm_appointements();

    $listAppointment = $appointment->listAppointment();

