<div class="container-fluid p-0">
    <div class="row text-center justify-content-center m-5">
        <div class="col my-auto">
            <p class="h2">Liste des patients</p>
        </div>
    </div>
    <div class="row text-center justify-content-center m-5">
        <div class="col my-auto">
            <form method="GET" action="index.php">
                <a class="btn btn-outline-danger" href="http://hopitallamanu/index.php?patient=add" title="Ajouter un patient">Ajouter un patient</a>
            </form>
        </div>
    </div>
    <div class="row text-center justify-content-around m-0">
        <div class="col my-auto">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-1">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted">Numéro patient</small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted">Nom</small></p>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted">Prénom</small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted">Date de naissance</small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted">Téléphone</small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted">Mail</small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-muted"></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($listPatient as $key => $row) { ?>
        <div class="row text-center justify-content-around m-0">
            <div class="col my-auto">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-1">
                            <div class="card-body px-2">
                                <p class="card-text h4"><small class="text-muted"><?= $row['id'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body px-2">
                                <p class="card-text h5"><small class="text-muted"><?= $row['lastname'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="card-body px-2">
                                <p class="card-text h5"><small class="text-muted"><?= $row['firstname'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body px-2">
                                <p class="card-text h5"><small class="text-muted"><?= $row['birthdate'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body px-2">
                                <p class="card-text h5"><small class="text-muted"><?= $row['phone'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body px-2">
                                <p class="card-text h5"><small class="text-muted"><a href="mailto:<?= $row['mail'] ?>"><?= $row['mail'] ?></a></small></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body px-2">
                                <p class="card-text"><small class="text-muted"></small>
                                    <form method="GET" action="">
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?addAppointment=<?= $row['id'] ?>" title="Ajout rendez-vous"><i class="far fa-calendar-check"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?detailPatient=<?= $row['id'] ?>" title="détails"><i class="fas fa-search"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?editPatient=<?= $row['id'] ?>" title="Editer"><i class="fas fa-pen"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?deletePatient=<?= $row['id'] ?>" title="Supprimer"><i class="fas fa-times"></i></a>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>