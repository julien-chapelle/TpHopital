<div class="row text-center justify-content-center m-5">
    <div class="col my-auto cardForm shadow">
        <?php foreach ($listPatient as $key => $row) {
            if ($row['id'] != $_GET['addAppointment']) {
                continue;
            }; ?>
            <form method="POST" action="">
                <div class="form-group">
                    <p class="h3"><?= 'Prise de rendez-vous pour ' . $row['lastname'] . ' ' . $row['firstname'] ?></p>
                    <input type="text" class="form-control text-center inputId" id="idPatient" name="idPatient" value="<?= $row['id'] ?>" hidden />

                </div>
                <div class="form-group">
                    <label for="dateAppointment">Date</label>
                    <input type="date" class="form-control text-center shadow" id="dateAppointment" name="dateAppointment" />
                </div>
                <div class="form-group">
                    <label for="hourAppointment">Heure</label>
                    <input type="time" class="form-control text-center shadow" id="hourAppointment" name="hourAppointment" placeholder="ex: 10:30" />
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-danger btn-lg shadow" href="http://hopitallamanu/index.php?detailPatient=<?= $row['id'] ?>" title="Retour à la liste patient"><i class="fas fa-reply"></i></a>
                    <button class="btn btn-outline-danger btn-lg shadow" type="submit" name="addAppointment" title="Créer rendez-vous"><i class="fas fa-calendar-plus"></i></button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>