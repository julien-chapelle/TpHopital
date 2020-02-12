<?php
if (isset($_GET['view']) && $_GET['view'] == 'Accueil' || empty($_GET)) {
    echo include('Views/Home/index.php');
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'patient') {
    echo include('Views/hlm_patient/index.php');
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'appointment') {
    echo include('Views/hlm_appointments/index.php');
    return;
} elseif (isset($_GET['patient']) && $_GET['patient'] == 'add') {
    echo include('Views/hlm_patient/create.php');
    return;
} elseif (isset($_GET['detailPatient'])) {
    echo include('Views/hlm_patient/details.php');
    return;
} elseif (isset($_GET['editPatient'])) {
    echo include('Views/hlm_patient/edit.php');
    return;
} elseif (isset($_GET['addAppointment'])) {
    echo include('Views/hlm_appointments/create.php');
    return;
} elseif (isset($_GET['editAppointment'])) {
    echo include('Views/hlm_appointments/edit.php');
    return;
} else {
    '';
};
?>
