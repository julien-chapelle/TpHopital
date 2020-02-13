<?php
if (isset($_GET['url']) && $_GET['url'] == '' || isset($_GET['view']) && $_GET['view'] == 'Accueil' || empty($_GET)) {
    echo 'Hopital La Manu';
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'patient') {
    echo 'Liste des patients';
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'appointment') {
    echo 'Liste des rendez-vous';
    return;
} elseif (isset($_GET['patient']) && $_GET['patient'] == 'add') {
    echo 'Ajout patient';
    return;
} elseif (isset($_GET['detailPatient'])) {
    echo 'Détail patient';
    return;
} elseif (isset($_GET['editPatient'])) {
    echo 'Editer patient';
    return;
} elseif (isset($_GET['addAppointment'])) {
    echo 'Ajout rendez-vous';
    return; 
} elseif (isset($_GET['editAppointment'])) {
    echo 'Modification rendez-vous';
    return;
} else {
    '';
};
?>
