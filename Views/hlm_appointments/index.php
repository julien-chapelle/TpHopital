<div class="row text-center justify-content-center m-5">
    <div class="col my-auto">
        <p class="h2">Liste des rendez-vous</p>
    </div>
</div>
<div class="row text-center justify-content-around m-0">
    <div class="col my-auto">
        <div class="card mb-3 shadow cardList">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">N° patient</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Date & heure</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark">Patient</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body px-2">
                        <p class="card-text h5"><small class="text-dark"></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach ($listAppointment as $value) { ?>
    <div class="row text-center justify-content-around m-0">
        <div class="col my-auto">
            <div class="card mb-3 shadow cardList">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= 'P' . $value['patientId'] ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= utf8_encode(strftime('%A %d %B %Y', strtotime($value['dateHour']))) . ' à ' . strftime('%Hh%M', strtotime($value['dateHour'])) ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body px-2">
                            <p class="card-text h5"><small class="text-dark"><?= $value['lastname'] . ' ' . $value['firstname'] ?></small></p>
                        </div>
                    </div>
                    <div class="col-md-2 my-auto">
                        <form method="GET" action="" class="m-0">
                            <a class="btn btn-outline-danger btn-sm m-1 shadow" href="http://hopitallamanu/index.php?detailPatient=<?= $value['patientId'] ?>" title="détails"><i class="fas fa-search"></i></a>
                            <a class="btn btn-outline-danger btn-sm shadow" href="http://hopitallamanu/index.php?editAppointment=<?= $value['appointmentsId'] ?>" title="Editer"><i class="fas fa-pen"></i></a>
                        </form>
                    </div>
                    <div class="col-md-1 my-auto">
                        <button class="btn btn-outline-danger btn-sm m-1 shadow" data-toggle="modal" data-target="<?= '#deleteAppointment' . $value['appointmentsId'] ?>" title="Supprimer"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>