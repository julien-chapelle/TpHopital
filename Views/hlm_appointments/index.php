<div class="container-fluid p-0">
    <div class="row text-center justify-content-center m-5">
        <div class="col my-auto">
            <p class="h2">Liste des rendez-vous</p>
        </div>
    </div>
    <div class="row text-center justify-content-around m-0">
        <div class="col my-auto">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <div class="card-body">
                            <p class="card-text h5"><small class="text-muted">Numéro client</small></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p class="card-text h5"><small class="text-muted">Date & heure</small></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p class="card-text h5"><small class="text-muted">Patient</small></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p class="card-text h5"><small class="text-muted"></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($listAppointment as $key => $row) { ?>
        <div class="row text-center justify-content-around m-0">
            <div class="col my-auto">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="card-body">
                                <p class="card-text h5"><small class="text-muted"><?= $row['id'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <p class="card-text h5"><small class="text-muted"><?= $row['dateHour'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <p class="card-text h5"><small class="text-muted"><?= $row['lastname'] . ' ' . $row['firstname'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted"></small>
                                    <form method="GET" action="index.php">
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?detailPatient=<?= $row['id'] ?>" title="détails"><i class="fas fa-search"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?editAppointment=<?= $row['id'] ?>" title="Editer"><i class="fas fa-pen"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?deleteAppointment=<?= $row['id'] ?>" title="Supprimer"><i class="fas fa-times"></i></a>
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