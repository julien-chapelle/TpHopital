<div class="row text-center justify-content-center">
    <div class="card text-center m-5 shadow cardForm">
        <?php foreach ($detailPatient as $value) { ?>
            <div class="card-header h3 border-0">
                <?= $value['lastname'] . ' ' . $value['firstname'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title h3">Information :</h5>
                <p class="card-text">NUMERO PATIENT : <?= $value['id'] ?></p>
                <p class="card-text">DATE DE NAISSANCE : <?= strftime('%d %B %Y', strtotime($value['birthdate'])) ?></p>
                <p class="card-text">TELEPHONE : <?= $value['phone'] ?></p>
                <p class="card-text">MAIL : <a href="mailto:<?= $value['mail'] ?>"><?= $value['mail'] ?></a></p>
                <form method="GET" action="index.php">
                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?list=patient" title="Retour à la liste patient"><i class="fas fa-reply"></i></a>
                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?addAppointment=<?= $value['id'] ?>" title="Ajout rendez-vous"><i class="far fa-calendar-check"></i></a>
                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?editPatient=<?= $value['id'] ?>" title="Editer"><i class="fas fa-pen"></i></a>
                    <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?deletePatient=<?= $value['id'] ?>" title="Supprimer"><i class="fas fa-times"></i></a>
                </form>
            </div>
        <?php }; ?>
        <div class="card-footer border-0">
            <p class="card-text">RENDEZ-VOUS :</p>
            <ul class="list-group">
                <?php foreach ($detailAppointment as $value) { ?>
                    <li class="list-group-item"><?= strftime('%A %d %B %Y', strtotime($value['dateHour'])) . ' à ' . strftime('%Hh%M', strtotime($value['dateHour'])) ?></li>
                <?php }; ?>
            </ul>
        </div>
    </div>
</div>