<div class="container-fluid p-0">
    <div class="row text-center justify-content-center m-5">
        <div class="col my-auto">
            <p class="h2">Liste des rendez-vous</p>
        </div>
    </div>
    <div class="row text-center justify-content-around m-0">
        <div class="col my-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date & heure</th>
                        <th scope="col">Patient</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listAppointment as $key => $row) { ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?></th>
                            <td><?= $row['dateHour'] ?></td>
                            <td><?= $row['lastname'] . ' ' . $row['firstname'] ?></td>
                            <td>
                                <form method="GET" action="index.php">
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=details" title="détails"><i class="fas fa-search"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=edit" title="Editer"><i class="fas fa-pen"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=delete" title="Supprimer"><i class="fas fa-times"></i></a>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>