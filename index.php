<?php

require_once('Controllers/hlm_patient/hlm_addPatientController.php');
require_once('Controllers/hlm_patient/hlm_listPatientController.php');
require_once('Controllers/Home/hlm_homeController.php');
require_once('Controllers/hlm_patient/hlm_patientIndexViewController.php');
require_once('Controllers/hlm_patient/hlm_patientCreateViewController.php');
require_once('Controllers/hlm_patient/hlm_patientDetailViewController.php');
require_once('Controllers/hlm_patient/hlm_patientEditViewController.php');
require_once('Controllers/hlm_patient/hlm_patientDeleteViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentIndexViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentCreateViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentDetailViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentEditViewController.php');
require_once('Controllers/hlm_appointments/hlm_appointmentDeleteViewController.php');

// var_dump($_GET);
// var_dump($_GET['patient']);
// var_dump($_GET['appointment']);
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <?= isset($_GET['view']) && $_GET['view'] == 'Accueil' || empty($_GET) ? '<title>Hopital La Manu</title>' : '' ?>
    <?= isset($_GET['list']) && $_GET['list'] == 'patient' ? '<title>Liste des patients</title>' : '' ?>
    <?= isset($_GET['list']) && $_GET['list'] == 'appointment' ? '<title>Liste des rendez-vous</title>' : '' ?>
    <?= isset($_GET['patient']) && $_GET['patient'] == 'add' ? '<title>Ajout patient</title>' : '' ?>
    <?= isset($_GET['appointment']) && $_GET['appointment'] == 'add' ? '<title>Ajout rendez-vous</title>' : '' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Title -->
    <link rel="shortcut icon" href="Assets/img/logoHlm.png" class="titleLogo" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="Content/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>

<body>
    <div class="container-fluid p-0">
        <form method="GET" action="index.php">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top borderBottomNav">
                <a class="navbar-brand" href="http://hopitallamanu/index.php?view=Accueil"><img src="Assets/img/logoHlm.png" class="navLogo" alt="Logo Hôpital La Manu" title="Hôpital La Manu" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://hopitallamanu/index.php?list=patient">Liste des patients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://hopitallamanu/index.php?list=appointment">Liste des rendez-vous</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </form>
        <?= isset($_GET['view']) && $_GET['view'] == 'Accueil' || empty($_GET) ? include('Views/Home/index.php') : '' ?>
        <?= isset($_GET['list']) && $_GET['list'] == 'patient' ? include('Views/hlm_patient/index.php') : '' ?>
        <?= isset($_GET['list']) && $_GET['list'] == 'appointment' ? include('Views/hlm_appointments/index.php') : '' ?>
        <?= isset($_GET['patient']) && $_GET['patient'] == 'add' ? include('Views/hlm_patient/create.php') : '' ?>
        <?= isset($_GET['appointment']) ? include('Views/hlm_appointments/create.php') : '' ?>
        <footer class="bg-light borderTopFooter">
            <div class="row text-center px-3 py-2 m-0 justify-content-around">
                <div class="col">
                    <p class="text-dark">Retrouvez-nous sur les réseaux sociaux</p>
                </div>
            </div>
            <div class="row px-3 py-2 m-0 justify-content-center">
                <a class="col-5 p-0 pr-1 text-right" href="https://www.facebook.com/hopital.prive.estuaire" target="_blank">
                    <img src="assets/img/facebook.png" class="footerLogoSize" title="Facebook" alt="Logo Facebook" />
                </a>
                <a class="col-2 p-0 pl-1 text-center" href="https://twitter.com/RamsaySante" target="_blank">
                    <img src="assets/img/twitter.png" class="footerLogoSize" title="Twitter" alt="Logo Twitter" />
                </a>
                <a class="col-5 p-0 pl-1 text-left" href="https://www.linkedin.com/company/ramsaysante/" target="_blank">
                    <img src="assets/img/linkedin.png" class="footerLogoSize" title="Linkedin" alt="Logo Linkedin" />
                </a>
            </div>
            <div class="row text-center text-dark px-3 py-2 m-0 borderTopFooter">
                <p class="col p-0"><?= 'Tout droits réservés© Hôpital privé La Manu - 2019 - ' . date('Y') ?></p>
            </div>
        </footer>
        <div id="scrollUp">
            <a href="#top" class="scrollUpColor"><i class="far fa-caret-square-up"></i></a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/script.js"></script>
</body>

</html>