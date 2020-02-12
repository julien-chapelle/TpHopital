<?php
include('Views/hlm_appointments/delete.php');
include('Views/hlm_patient/delete.php');

if (isset($_GET['view']) && $_GET['view'] == 'Accueil' || empty($_GET)) {
    include('Views/Home/index.php');
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'patient') {
    include('Views/hlm_patient/index.php');
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'appointment') {
    include('Views/hlm_appointments/index.php');
    return;
} elseif (isset($_GET['patient']) && $_GET['patient'] == 'add') {
    include('Views/hlm_patient/create.php');
    return;
} elseif (isset($_GET['detailPatient'])) {
    include('Views/hlm_patient/details.php');
    return;
} elseif (isset($_GET['editPatient'])) {
    include('Views/hlm_patient/edit.php');
    return;
} elseif (isset($_GET['addAppointment'])) {
    include('Views/hlm_appointments/create.php');
    return;
} elseif (isset($_GET['editAppointment'])) {
    include('Views/hlm_appointments/edit.php');
    return;
} else {
    '';
};
?>
