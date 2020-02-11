<div class="row text-center justify-content-center m-5">
    <div class="col my-auto">
        <?php foreach ($detailAppointment as $value) { ?>
            <form method="POST" action="">
                <div class="form-group">
                    <p class="h3"><?= $value['lastname'] . ' ' . $value['firstname'] ?></p>
                    <label for="idPatient">Numéro patient</label>
                    <input type="text" class="form-control text-center" id="idPatient" name="idPatient" value="<?= $value['id'] ?>" readonly />

                </div>
                <div class="form-group">
                    <label for="dateAppointment">Date</label>
                    <input type="date" class="form-control text-center" id="dateAppointment" name="dateAppointment" value="<?= strftime('%Y-%m-%d', strtotime($value['dateHour'])) ?>" />
                </div>
                <div class="form-group">
                    <label for="hourAppointment">Heure</label>
                    <input type="time" class="form-control text-center" id="hourAppointment" name="hourAppointment" value="<?= strftime('%H:%M', strtotime($value['dateHour'])) ?>" />
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-danger btn-lg" href="http://hopitallamanu/index.php?list=appointment" title="Retour à la liste rendez-vous"><i class="fas fa-reply"></i></a>
                    <button class="btn btn-outline-danger btn-lg" type="submit" name="editAppointment" title="Modifier rendez-vous"><i class="fas fa-calendar-plus"></i></button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>