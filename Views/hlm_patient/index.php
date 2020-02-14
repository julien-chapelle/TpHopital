<div class="row text-center justify-content-center m-5">
    <div class="col my-auto">
        <p class="h2">Liste des patients</p>
    </div>
</div>
<div class="row text-center justify-content-center m-5">
    <div class="col my-auto text-center">
        <form method="GET" action="index.php">
            <a class="btn btn-outline-danger shadow" href="http://hopitallamanu/index.php?patient=add" title="Ajouter un patient">Ajouter un patient</a>
        </form>
    </div>
</div>
<div class="row justify-content-center mx-0 my-2">
    <div class="col my-auto">
        <form method="POST" action="http://hopitallamanu/index.php?search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 shadow" type="search" placeholder="Recherche" aria-label="Search" name="searchLastname">
            <button class="btn btn-outline-primary my-2 my-sm-0 shadow" name="searchSubmit" type="submit" title="Recherche"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
<div class="row text-center justify-content-around m-0">
    <div class="col my-auto">
        <div class="card mb-3 shadow cardList">
            <div class="row no-gutters">
                <div class="col-md-1">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">N° patient</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Nom</small></p>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Prénom</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Date de naissance</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Téléphone</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Mail</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark"></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach ($listLimitePatient as $value) { ?>
    <div class="row text-center justify-content-around m-0">
        <div class="col my-auto">
            <div class="card mb-3 shadow cardList">
                <div class="row no-gutters">
                    <div class="col-md-1">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= 'P' . $value['id'] ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= $value['lastname'] ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= $value['firstname'] ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= strftime('%d %B %Y', strtotime($value['birthdate'])) ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><a href="tel:<?= $value['phone'] ?>"><?= $value['phone'] ?></a></small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><a href="mailto:<?= $value['mail'] ?>"><?= $value['mail'] ?></a></small></p>
                        </div>
                    </div>
                    <form method="GET" action="" class="m-0 col-md-1 my-auto">
                        <a class="btn btn-outline-danger btn-sm m-1 shadow" href="http://hopitallamanu/index.php?addAppointment=<?= $value['id'] ?>" title="Ajout rendez-vous"><i class="far fa-calendar-check"></i></a>
                        <a class="btn btn-outline-danger btn-sm shadow" href="http://hopitallamanu/index.php?detailPatient=<?= $value['id'] ?>" title="détails"><i class="fas fa-search"></i></a>
                        <a class="btn btn-outline-danger btn-sm shadow" href="http://hopitallamanu/index.php?editPatient=<?= $value['id'] ?>" title="Editer"><i class="fas fa-pen"></i></a>
                    </form>
                    <div class="col-md-1 my-auto text-center">
                        <button class="btn btn-outline-danger btn-sm m-1 shadow" data-toggle="modal" data-target="<?= '#deletePatient' . $value['id'] ?>" title="Supprimer"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="row text-center justify-content-center m-0">
    <?php if ($page > 1) { ?>
        <a class="btn btn-outline-danger mx-2" href="http://hopitallamanu/index.php?list=patient&amp;page=<?= 1 ?>"><i class="fas fa-angle-double-left"></i></a>
        <a class="btn btn-outline-danger mx-2" href="http://hopitallamanu/index.php?list=patient&amp;page=<?= $page - 1 ?>"><i class="fas fa-angle-left"></i></a>
    <?php } else {
        '';
    } ?>
    <p class="text-danger mx-2"><?= $page . '/' . $pageCount ?></p>
    <?php if ($page < $pageCount) { ?>
        <a class="btn btn-outline-danger mx-2" href="http://hopitallamanu/index.php?list=patient&amp;page=<?= $page + 1 ?>"><i class="fas fa-angle-right"></i></a>
        <a class="btn btn-outline-danger mx-2" href="http://hopitallamanu/index.php?list=patient&amp;page=<?= $pageCount ?>"><i class="fas fa-angle-double-right"></i></a>
    <?php } else {
        '';
    } ?>
</div>