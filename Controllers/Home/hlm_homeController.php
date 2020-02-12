<?php
date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, 'fra', 'fr_FR.utf8');

require_once('Controllers/hlm_patient/hlm_addPatientController.php');
require_once('Controllers/hlm_appointments/hlm_addAppointmentController.php');
require_once('Controllers/hlm_patient/hlm_listPatientController.php');
require_once('Controllers/hlm_appointments/hlm_listAppointmentController.php');
require_once('Controllers/Home/hlm_homeController.php');
require_once('Controllers/hlm_patient/hlm_patientDetailViewController.php');
require_once('Controllers/hlm_patient/hlm_patientEditViewController.php');
require_once('Controllers/hlm_patient/hlm_patientDeleteViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentEditViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentDeleteViewController.php');

?>



