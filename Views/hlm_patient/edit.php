<?php foreach ($detailPatient as $value) { ?>
    <div class="row text-center justify-content-center m-5">
        <div class="col my-auto">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="lastnamePatient">Nom</label>
                    <input type="text" class="form-control text-center" id="lastnamePatient" name="lastnamePatient" value="<?= $value['lastname'] ?>">
                </div>
                <div class="form-group">
                    <label for="firstnamePatient">Prénom</label>
                    <input type="text" class="form-control text-center" id="firstnamePatient" name="firstnamePatient" value="<?= $value['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label for="birthdatePatient">Date de naissance</label>
                    <input type="date" class="form-control text-center" id="birthdatePatient" name="birthdatePatient" value="<?= $value['birthdate'] ?>">
                </div>
                <div class="form-group">
                    <label for="phonePatient">Téléphone</label>
                    <input type="tel" class="form-control text-center" id="phonePatient" name="phonePatient" value="<?= $value['phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="mailPatient">Mail</label>
                    <input type="email" class="form-control text-center" id="mailPatient" name="mailPatient" value="<?= $value['mail'] ?>">
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-danger btn-lg" href="http://hopitallamanu/index.php?detailPatient=<?= $value['id'] ?>" title="Retour au détail du patient"><i class="fas fa-reply"></i></a>
                    <button class="btn btn-outline-danger btn-lg" type="submit" name="editPatient" title="Editer patient"><i class="fas fa-user-edit"></i></button>
                </div>
            </form>
        </div>
    </div>
<?php }; ?>