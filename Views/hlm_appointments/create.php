<div class="row text-center justify-content-center m-5">
    <div class="col my-auto">
        <form method="POST" action="">
            <div class="form-group">
                <?php foreach ($listPatient as $key => $row) {
                    if ('add' . $row['id'] != $_GET['appointment']) {
                        continue;
                    }; ?>
                    
                    <p class="h3"><?= $row['lastname'] . ' ' . $row['firstname'] ?></p>
                    <label for="idPatient">Numéro patient</label>
                    <input type="text" class="form-control text-center" id="idPatient" name="idPatient" value="<?= $row['id'] ?>" readonly />
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="dateAppointment">Date</label>
                <input type="date" class="form-control text-center" id="dateAppointment" name="dateAppointment" />
            </div>
            <div class="form-group">
                <label for="hourAppointment">Heure</label>
                <input type="time" class="form-control text-center" id="hourAppointment" name="hourAppointment" placeholder="ex: 10:30" />
            </div>
            <div class="form-group">
                <a class="btn btn-outline-danger btn-lg" href="http://hopitallamanu/index.php?list=patient" title="Retour à la liste patient"><i class="fas fa-reply"></i></a>
                <button class="btn btn-outline-danger btn-lg" type="submit" name="addAppointment" title="Créer rendez-vous"><i class="fas fa-calendar-plus"></i></button>
            </div>
        </form>
    </div>
</div>