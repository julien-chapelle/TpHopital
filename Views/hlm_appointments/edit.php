<div class="row text-center justify-content-center m-5">
    <div class="col my-auto cardForm shadow">
        <?php foreach ($detailAppointment as $value) { ?>
            <form method="POST" action="">
                <div class="form-group">
                    <p class="h3"><?= $value['lastname'] . ' ' . $value['firstname'] ?></p>
                    <input type="text" class="form-control text-center inputId" id="idPatient" name="idPatient" value="<?= $value['id'] ?>" hidden />
                </div>
                <div class="form-group">
                    <label for="dateAppointment">Date</label>
                    <input type="date" class="form-control text-center shadow" id="dateAppointment" name="dateAppointment" value="<?= isset($_POST['editAppointment']) && !empty($arrayError) ? $_POST['dateAppointment'] : strftime('%Y-%m-%d', strtotime($value['dateHour'])) ?>" />
                    <p class="errorMessage"><?= isset($arrayError['dateAppointment']) && !empty($arrayError['dateAppointment']) ? $arrayError['dateAppointment'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="hourAppointment">Heure</label>
                    <input type="time" class="form-control text-center shadow" id="hourAppointment" name="hourAppointment" value="<?= isset($_POST['editAppointment']) && !empty($arrayError) ? $_POST['hourAppointment'] : strftime('%H:%M', strtotime($value['dateHour'])) ?>" />
                    <p class="errorMessage"><?= isset($arrayError['hourAppointment']) && !empty($arrayError['hourAppointment']) ? $arrayError['hourAppointment'] : '' ?></p>
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-danger btn-lg shadow" href="http://hopitallamanu/index.php?list=appointment" title="Retour à la liste rendez-vous"><i class="fas fa-reply"></i></a>
                    <button class="btn btn-outline-danger btn-lg shadow" type="submit" name="editAppointment" title="Modifier rendez-vous"><i class="fas fa-calendar-plus"></i></button>
                    <p class="validMessage shadow"><?= isset($_POST['editAppointment']) && empty($arrayError) ? 'Rendez-vous modifié' : '' ?></p>
                </div>
            </form>
        <?php } ?>
    </div>
</div>