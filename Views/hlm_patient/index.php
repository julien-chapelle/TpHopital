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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numéro patient</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Mail</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listPatient as $key => $row) { ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?></th>
                            <td><?= $row['lastname'] ?></td>
                            <td><?= $row['firstname'] ?></td>
                            <td><?= $row['birthdate'] ?></td>
                            <td><?= $row['phone'] ?></td>
                            <td><?= $row['mail'] ?></td>
                            <td>
                                <form method="GET" action="index.php">
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=add<?= $row['id'] ?>" title="Ajout rendez-vous"><i class="far fa-calendar-check"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?patient=details<?= $row['id'] ?>" title="détails"><i class="fas fa-search"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?patient=edit<?= $row['id'] ?>" title="Editer"><i class="fas fa-pen"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?patient=delete<?= $row['id'] ?>" title="Supprimer"><i class="fas fa-times"></i></a>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>