<?php require_once('Controllers/Home/hlm_homeController.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title><?= include('Controllers/Home/hlm_homeTitleController.php') ?></title>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top borderBottomNav shadow">
            <a class="navbar-brand" href="http://hopitallamanu/index.php?view=Accueil"><img src="Assets/img/logoHlm.png" class="navLogo" alt="Logo Hôpital La Manu" title="Logo Hôpital La Manu" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form method="GET" action="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://hopitallamanu/index.php?list=patient" title="Liste des patients">Liste des patients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://hopitallamanu/index.php?list=appointment" title="Liste des rendez-vous">Liste des rendez-vous</a>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
        <div class="container-fluid p-0 pb-5">
            <?= include('Controllers/Home/hlm_homeBodyController.php') ?>
        </div>
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